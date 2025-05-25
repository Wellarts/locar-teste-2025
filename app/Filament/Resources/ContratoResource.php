<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ContratoResource\Pages;
use App\Filament\Resources\ContratoResource\RelationManagers;
use App\Models\Contrato;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Mohamedsabil83\FilamentFormsTinyeditor\Components\TinyEditor;

class ContratoResource extends Resource
{
    protected static ?string $model = Contrato::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TinyEditor::make('texto')
                    ->label('Variáveis')
                    ->required()
                    ->hint('{{cliente->nome}} - 
                            {{cliente->endereco}} - 
                            {{cliente->cidade}} - 
                            {{cliente->uf}} - 
                            {{cliente->cpfCnpj}} - 
                            {{cliente->rg}} - 
                            {{cliente->expRg}} - 
                            {{cliente->telefone1}} - 
                            {{cliente->telefone2}} - 
                            {{cliente->email}} - 
                            {{cliente->cnh}} - 
                            {{cliente->validadeCNH}} - 
                            {{veiculo->modelo}} - 
                            {{veiculo->marca}} - 
                            {{veiculo->ano}} - 
                            {{veiculo->placa}} - 
                            {{veiculo->chassi}} - 
                            {{veiculo->renavam}} - 
                            {{veiculo->cor}} -                    
                            {{locacao->dataAtual}} - 
                            {{locacao->dataSaida}} - 
                            {{locacao->dataRetorno}} - 
                            {{locacao->horaSaida}} - 
                            {{locacao->horaRetorno}} - 
                            {{locacao->kmSaida}} - 
                            {{locacao->qtdDiarias}} - 
                            {{locacao->valorDiaria}} - 
                            {{locacao->valorDesconto}} - 
                            {{locacao->valorTotalDesconto}} - 
                            {{locacao->obs}}')
                    ->placeholder('Escreva o texto do contrato aqui')

                    ->columnSpanFull(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
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
            'index' => Pages\ManageContratos::route('/'),
        ];
    }
}
