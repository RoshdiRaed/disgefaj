<?php

namespace App\Filament\Resources;

use App\Filament\Resources\CallToActionResource\Pages;
use App\Filament\Resources\CallToActionResource\RelationManagers;
use App\Models\CallToAction;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Illuminate\Support\Str;

class CallToActionResource extends Resource
{
    protected static ?string $model = CallToAction::class;

    protected static ?string $navigationIcon = 'heroicon-o-megaphone';
    protected static ?string $navigationLabel = 'نداءات للعمل';
    protected static ?string $modelLabel = 'نداء للعمل';
    protected static ?string $pluralModelLabel = 'نداءات للعمل';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Wizard::make([
                    Forms\Components\Wizard\Step::make('المعلومات الأساسية')
                        ->description('أدخل العنوان والوصف')
                        ->icon('heroicon-o-information-circle')
                        ->schema([
                            Forms\Components\Grid::make(2)
                                ->schema([
                                    Forms\Components\TextInput::make('title')
                                        ->label('العنوان')
                                        ->required()
                                        ->maxLength(100)
                                        ->placeholder('مثال: مستعد لبناء مشروعك القادم؟')
                                        ->live(onBlur: true)
                                        ->afterStateUpdated(function ($state, callable $set) {
                                            $set('slug', Str::slug($state));
                                        })
                                        ->helperText('عنوان جذاب يعكس الهدف'),
                                    Forms\Components\TextInput::make('slug')
                                        ->label('الرابط المختصر')
                                        ->disabled()
                                        ->dehydrated()
                                        ->helperText('يُنشأ تلقائيًا من العنوان'),
                                ]),
                            Forms\Components\RichEditor::make('description')
                                ->label('الوصف')
                                ->required()
                                ->toolbarButtons([
                                    'bold', 'italic', 'underline',
                                    'bulletList', 'orderedList', 'link',
                                ])
                                ->placeholder('اكتب وصفًا تحفيزيًا...')
                                ->maxLength(1000)
                                ->fileAttachmentsDisk('public')
                                ->fileAttachmentsDirectory('cta-descriptions')
                                ->helperText('وصف قصير وملهم')
                                ->columnSpanFull(),
                        ]),
                    Forms\Components\Wizard\Step::make('إعدادات الأزرار')
                        ->description('تخصيص الأزرار لتحسين التفاعل')
                        ->icon('heroicon-o-cursor-arrow-ripple')
                        ->schema([
                            Forms\Components\Grid::make(2)
                                ->schema([
                                    Forms\Components\TextInput::make('primary_button_text')
                                        ->label('نص الزر الأساسي')
                                        ->required()
                                        ->maxLength(30)
                                        ->placeholder('مثال: تواصل معي الآن')
                                        ->live(onBlur: true)
                                        ->helperText('نص قصير وجذاب للزر الأساسي'),
                                    Forms\Components\TextInput::make('primary_button_url')
                                        ->label('رابط الزر الأساسي')
                                        ->url()
                                        ->placeholder('مثال: https://example.com/contact')
                                        ->disabled(fn (callable $get) => empty($get('primary_button_text')))
                                        ->helperText('رابط صالح يُفعّل بعد إدخال نص الزر'),
                                    Forms\Components\TextInput::make('secondary_button_text')
                                        ->label('نص الزر الثانوي')
                                        ->maxLength(30)
                                        ->placeholder('مثال: عرض جميع المشاريع')
                                        ->live(onBlur: true)
                                        ->helperText('نص اختياري للزر الثانوي'),
                                    Forms\Components\TextInput::make('secondary_button_url')
                                        ->label('رابط الزر الثانوي')
                                        ->url()
                                        ->placeholder('مثال: https://example.com/projects')
                                        ->disabled(fn (callable $get) => empty($get('secondary_button_text')))
                                        ->helperText('رابط صالح يُفعّل بعد إدخال نص الزر الثانوي'),
                                ]),
                        ]),
                    Forms\Components\Wizard\Step::make('إعدادات العرض')
                        ->description('تخصيص مظهر القسم')
                        ->icon('heroicon-o-paint-brush')
                        ->schema([
                            Forms\Components\Grid::make(2)
                                ->schema([
                                    Forms\Components\TextInput::make('background_opacity')
                                        ->label('شفافية الخلفية')
                                        ->numeric()
                                        ->minValue(0)
                                        ->maxValue(100)
                                        ->default(10)
                                        ->helperText('شفافية الخلفية (0-100)'),
                                    Forms\Components\Select::make('border_color')
                                        ->label('لون الحدود')
                                        ->options([
                                            'white' => 'أبيض',
                                            'gray-300' => 'رمادي فاتح',
                                            'purple-600' => 'بنفسجي',
                                            'blue-600' => 'أزرق',
                                        ])
                                        ->default('white')
                                        ->helperText('اختر لون الحدود للزر الثانوي'),
                                    Forms\Components\Toggle::make('is_active')
                                        ->label('تفعيل نداء العمل')
                                        ->default(true)
                                        ->helperText('إذا تم تعطيله، لن يظهر في الواجهة'),
                                ]),
                            Forms\Components\Actions::make([
                                Forms\Components\Actions\Action::make('preview')
                                    ->label('معاينة')
                                    ->icon('heroicon-o-eye')
                                    ->color('primary')
                                    ->action(function ($get) {
                                        \Filament\Notifications\Notification::make()
                                            ->title('معاينة نداء العمل')
                                            ->body('سيتم عرض معاينة القسم بناءً على البيانات المدخلة.')
                                            ->success()
                                            ->send();
                                    }),
                            ]),
                        ]),
                ])
                ->submitAction(
                    Forms\Components\Actions\Action::make('submit')
                        ->label(fn () => 'حفظ القسم')
                        ->icon(fn () => 'heroicon-o-check-circle')
                        ->color(fn () => 'success')
                        ->submit('form')
                )
                    ->skippable()
                    ->persistStepInQueryString()
                    ->nextAction(fn (Forms\Components\Actions\Action $action) => $action->label('التالي')->icon('heroicon-o-arrow-left'))
                    ->previousAction(fn (Forms\Components\Actions\Action $action) => $action->label('السابق')->icon('heroicon-o-arrow-right')),
            ])
            ->columns(2);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('title')
                    ->label('العنوان')
                    ->searchable()
                    ->sortable(),
                Tables\Columns\TextColumn::make('primary_button_text')
                    ->label('الزر الأساسي')
                    ->searchable(),
                Tables\Columns\TextColumn::make('secondary_button_text')
                    ->label('الزر الثانوي')
                    ->searchable(),
                Tables\Columns\ToggleColumn::make('is_active')
                    ->label('مفعّل')
                    ->sortable(),
                Tables\Columns\TextColumn::make('created_at')
                    ->label('تاريخ الإنشاء')
                    ->dateTime()
                    ->sortable(),
            ])
            ->filters([
                Tables\Filters\TernaryFilter::make('is_active')
                    ->label('الحالة')
                    ->trueLabel('مفعّل')
                    ->falseLabel('غير مفعّل'),
            ])
            ->actions([
                Tables\Actions\EditAction::make()->label('تعديل'),
                Tables\Actions\DeleteAction::make()->label('حذف'),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make()->label('حذف المحدد'),
                ]),
            ])
            ->defaultSort('created_at', 'desc');
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListCallToActions::route('/'),
            'create' => Pages\CreateCallToAction::route('/create'),
            'edit' => Pages\EditCallToAction::route('/{record}/edit'),
        ];
    }
}
?>
