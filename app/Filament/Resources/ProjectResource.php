<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ProjectResource\Pages;
use App\Models\Project;
use Filament\Forms;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Forms\Form;
use Filament\Tables\Table;

class ProjectResource extends Resource
{
    protected static ?string $model = Project::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';


    // Set the singular label for the resource
    public static function getModelLabel(): string
    {
        return 'مشروع';
    }

    // Set the plural label for the resource (used in navigation)
    public static function getPluralModelLabel(): string
    {
        return 'المشاريع';
    }

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('title')
                    ->label('عنوان المشروع')
                    ->required(),
                Forms\Components\Textarea::make('description')
                    ->label('الوصف')
                    ->required(),
                Forms\Components\Select::make('status')
                    ->label('الحالة')
                    ->options([
                        'completed' => 'مكتمل',
                        'in_progress' => 'جاري التطوير',
                        'available' => 'API متاح',
                    ])
                    ->required(),
                Forms\Components\Repeater::make('technologies')
                    ->label('التقنيات')
                    ->schema([
                        Forms\Components\TextInput::make('name')
                            ->label('اسم التقنية')
                            ->required(),
                        Forms\Components\ColorPicker::make('color')
                            ->label('لون التقنية'),
                    ]),
                Forms\Components\TextInput::make('rating')
                    ->label('التقييم')
                    ->numeric()
                    ->minValue(0)
                    ->maxValue(5),
                Forms\Components\TextInput::make('reviews_count')
                    ->label('عدد التقييمات')
                    ->numeric(),
                Forms\Components\FileUpload::make('image')
                    ->label('الصورة')
                    ->image()
                    ->imageEditor()
                    ->directory('projects')
                    ->preserveFilenames()
                    ->downloadable()
                    ->reorderable()
                    ->multiple()
                    ->openable()
                    ->maxSize(5120) // 5MB
                    ->acceptedFileTypes(['image/*'])
                    ->helperText('اسحب وأفلت الصور هنا أو اضغط للاختيار'),
                Forms\Components\TextInput::make('gradient_colors')
                    ->label('ألوان التدرج')
                    ->placeholder('مثال: from-red-500 via-pink-500 to-purple-600')
                    ->helperText('أدخل ألوان التدرج باستخدام صيغة Tailwind. يمكنك استخدام from و via و to')
                    ->prefix('bg-gradient-to-r')
                    ->datalist([
                        'from-red-500 to-blue-500',
                        'from-purple-500 to-pink-500',
                        'from-blue-500 via-teal-500 to-green-500',
                        'from-yellow-500 via-orange-500 to-red-500'
                    ])
                    ->maxLength(100),
                Forms\Components\TextInput::make('action_text')
                    ->label('نص الزر')
                    ->required(),
                Forms\Components\TextInput::make('action_url')
                    ->label('رابط الزر')
                    ->url(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('title')->label('العنوان'),
                Tables\Columns\TextColumn::make('status')->label('الحالة'),
                Tables\Columns\TextColumn::make('rating')->label('التقييم'),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\DeleteBulkAction::make(),
            ]);
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListProjects::route('/'),
            'create' => Pages\CreateProject::route('/create'),
            'edit' => Pages\EditProject::route('/{record}/edit'),
        ];
    }
}
