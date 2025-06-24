<?php

namespace App\Filament\Resources;

use App\Filament\Resources\CaixaResource\Pages;
use App\Filament\Resources\CaixaResource\RelationManagers;
use App\Models\Caixa;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class CaixaResource extends Resource
{
    protected static ?string $model = Caixa::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('nome')
                    ->required()
                    ->maxLength(255)
                    ->label('Nome do Caixa'),
                Forms\Components\Select::make('banco_id')
                    ->label('Banco Associado')
                    ->relationship('banco', 'nome')
                    ->searchable()
                   // ->required()
                    ->placeholder('Selecione um Banco'),
                Forms\Components\Toggle::make('ativo')
                    ->default(true)
                    ->label('Ativo'),
                Forms\Components\TextInput::make('descricao')
                    ->maxLength(500)
                    ->label('Descrição do Caixa'),
                Forms\Components\TextInput::make('saldo_atual')
                    ->numeric()
                    ->required()
                    ->default(0)
                    ->label('Saldo Inicial'),
                
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('nome')
                    ->label('Nome do Caixa')
                    ->searchable()
                    ->sortable(),
                Tables\Columns\TextColumn::make('banco.nome')
                    ->label('Banco Associado')
                    ->searchable()
                    ->sortable(),
                Tables\Columns\TextColumn::make('descricao')
                    ->label('Descrição')
                    ->searchable()
                    ->sortable(),
                Tables\Columns\TextColumn::make('saldo_atual')
                    ->label('Saldo Atual')
                    ->money('BRL')
                    ->sortable(),
                Tables\Columns\BooleanColumn::make('ativo')
                    ->label('Ativo')
                    ->sortable(),
                
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ManageCaixas::route('/'),
        ];
    }
}
