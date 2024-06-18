<?php

namespace App\Filament\Resources;

use App\Filament\Resources\AnswersResource\Pages;
use App\Filament\Resources\AnswersResource\RelationManagers;
use App\Models\Answers;
use App\Models\Questions;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class AnswersResource extends Resource
{
    protected static ?string $model = Answers::class;
    protected static ?string $pluralModelLabel = 'Ответы';
    protected static ?int $navigationSort = 2;
//    protected static ?string $navigationGroup = 'Вопросы и ответы';
    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';
    protected static ?string $modelLabel = 'Ответ';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                //
                Forms\Components\TextInput::make('name')
                    ->label('Имя')
                    ->required(),
                Forms\Components\TextInput::make('email')
                    ->label('Электронная почта')
                    ->email()
                    ->required(),
                Forms\Components\TextInput::make('phone')
                    ->label('Номер телефона')
                    ->tel()
                    ->required(),
                Forms\Components\Select::make('question_id')
                    ->label('Вопрос ')
                    ->options(Questions::all()->pluck('question', 'id'))
                    ->required()
                    ->searchable(),
                Forms\Components\MarkdownEditor::make('answer')
                    ->label('Ответ ')
                    ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                //
                Tables\Columns\TextColumn::make('name'),
                Tables\Columns\TextColumn::make('email'),
                Tables\Columns\TextColumn::make('phone')
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
            'index' => Pages\ListAnswers::route('/'),
            'create' => Pages\CreateAnswers::route('/create'),
            'edit' => Pages\EditAnswers::route('/{record}/edit'),
        ];
    }
}
