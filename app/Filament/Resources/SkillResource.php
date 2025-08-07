<?php

namespace App\Filament\Resources;

use App\Filament\Resources\SkillResource\Pages;
use App\Models\Skill;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;

class SkillResource extends Resource
{
    protected static ?string $model = Skill::class;

    protected static ?string $navigationIcon = 'heroicon-o-light-bulb';

    protected static ?string $navigationLabel = 'المهارات';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('name')
                    ->label('اسم المهارة')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('description')
                    ->label('الوصف')
                    ->required()
                    ->maxLength(255),
                Forms\Components\FileUpload::make('icon_path')
                    ->label('أيقونة المهارة')
                    ->image()
                    ->directory('skill-icons')
                    ->preserveFilenames()
                    ->acceptedFileTypes(['image/png', 'image/jpeg', 'image/svg+xml'])
                    ->maxSize(5120) // 5MB
                    ->helperText('اسحب وأفلت صورة الأيقونة (PNG، JPEG، أو SVG) أو انقر للاختيار')
                    ->required(),
                Forms\Components\TextInput::make('proficiency_percentage')
                    ->label('نسبة الإتقان (%)')
                    ->numeric()
                    ->required()
                    ->minValue(0)
                    ->maxValue(100),
                Forms\Components\TextInput::make('gradient_colors')
                    ->label('ألوان التدرج')
                    ->required()
                    ->placeholder('مثال: from-blue-400 to-purple-500')
                    ->helperText('أدخل ألوان التدرج بصيغة Tailwind (مثال: from-blue-400 to-purple-500)')
                    ->datalist([
                        'from-blue-400 to-purple-500',
                        'from-green-400 to-teal-500',
                        'from-yellow-400 to-orange-500',
                        'from-cyan-400 to-blue-500',
                        'from-purple-400 to-pink-500',
                        'from-orange-400 to-red-500',
                        'from-blue-400 to-cyan-500',
                        'from-indigo-400 to-purple-500',
                    ])
                    ->maxLength(100),
                Forms\Components\TextInput::make('proficiency_text')
                    ->label('نص الإتقان')
                    ->required()
                    ->placeholder('مثال: خبير، متقدم، متوسط')
                    ->maxLength(50),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('name')
                    ->label('اسم المهارة')
                    ->searchable(),
                Tables\Columns\TextColumn::make('description')
                    ->label('الوصف')
                    ->limit(50),
                Tables\Columns\ImageColumn::make('icon_path')
                    ->label('الأيقونة')
                    ->square(),
                Tables\Columns\TextColumn::make('proficiency_percentage')
                    ->label('نسبة الإتقان')
                    ->formatStateUsing(fn($state) => "{$state}%"),
                Tables\Columns\TextColumn::make('proficiency_text')
                    ->label('نص الإتقان'),
                Tables\Columns\TextColumn::make('gradient_colors')
                    ->label('ألوان التدرج'),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\DeleteBulkAction::make(),
            ]);
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListSkills::route('/'),
            'create' => Pages\CreateSkill::route('/create'),
            'edit' => Pages\EditSkill::route('/{record}/edit'),
        ];
    }
}
