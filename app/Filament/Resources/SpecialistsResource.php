<?php

namespace App\Filament\Resources;

use App\Filament\Resources\SpecialistsResource\Pages;
use App\Filament\Resources\SpecialistsResource\RelationManagers;
use App\Models\Specialist;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class SpecialistsResource extends Resource
{
    protected static ?string $model = Specialist::class;

    protected static ?string $pluralModelLabel = 'Специалисты';
    protected static ?int $navigationSort = 5;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';
    protected static ?string $modelLabel = 'Специалиста';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                //
                Forms\Components\TextInput::make('name')
                    ->required()
                    ->label('Имя'),
                Forms\Components\TextInput::make('surname')
                    ->required()
                    ->label('Фамилия'),
                Forms\Components\TextInput::make('patronymic')
                    ->required()
                    ->label('Отчество'),
                Forms\Components\TextInput::make('position')
                    ->required()
                    ->label('Должность'),
                Forms\Components\MarkdownEditor::make('information')
                    ->label('Информация')
                    ->required(),
                Forms\Components\FileUpload::make('image')
                    ->label('Изображение')
                    ->directory('/media/specialists')->visibility('public')
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('name')
                    ->label('Имя'),
                Tables\Columns\TextColumn::make('surname')
                    ->label('Фамилия'),
                Tables\Columns\TextColumn::make('position')
                    ->label('Должность')
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
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
            'index' => Pages\ListSpecialists::route('/'),
            'create' => Pages\CreateSpecialists::route('/create'),
            'edit' => Pages\EditSpecialists::route('/{record}/edit'),
        ];
    }
}
