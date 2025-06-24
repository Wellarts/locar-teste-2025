<?php

namespace App\Filament\Resources;

use App\Filament\Resources\FluxoCaixaResource\Pages;
use App\Filament\Resources\FluxoCaixaResource\RelationManagers;
use App\Models\FluxoCaixa;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\Summarizers\Sum;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Tables\Filters\Filter;
use Filament\Tables\Grouping\Group;
use Filament\Tables\Filters\SelectFilter;

class FluxoCaixaResource extends Resource
{
    protected static ?string $model = FluxoCaixa::class;

    protected static ?string $navigationIcon = 'heroicon-o-chart-pie';

    protected static ?string $navigationLabel = 'Fluxo de Caixa';

    protected static ?string $navigationGroup = 'Financeiro';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Select::make('tipo')
                    ->options([
                        'CREDITO' => 'CRÉDITO',
                        'DEBITO' => 'DÉBITO',
                    ])
                    ->live()
                    ->afterStateUpdated(function ($context ,$state, callable $set, callable $get) {
                        if($context === 'edit') {
                            if ($state === 'DEBITO') {
                                $valor = $get('valor');
                                if ($valor > 0) {
                                    $set('valor', -abs($valor));
                                }
                            } elseif ($state === 'CREDITO') {
                                $valor = $get('valor');
                                if ($valor < 0) {
                                    $set('valor', abs($valor));
                                }
                            }
                        }
                    })
                    ->required(),

                Forms\Components\Select::make('caixa_id')
                    ->label('Caixa')
                    ->relationship('caixa', 'nome')
                    ->searchable()
                    ->preload()
                    ->required()
                    ->placeholder('Selecione um Caixa'),

                Forms\Components\TextInput::make('valor')
                    ->currencyMask(thousandSeparator: '.', decimalSeparator: ',', precision: 2)
                    ->numeric()
                    ->prefix('R$')
                    ->inputMode('decimal')
                    ->required()
                    ->afterStateUpdated(function ($state, callable $set, callable $get) {
                        if ($get('tipo') === 'DEBITO' && $state > 0) {
                            $set('valor', -abs($state));
                        } elseif ($get('tipo') === 'CREDITO' && $state < 0) {
                            $set('valor', abs($state));
                        }
                    }),

                Forms\Components\Textarea::make('obs')
                    ->label('Descrição')
                    ->autosize()
                    ->columnSpanFull()
                    ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->defaultSort('created_at', 'desc')
            ->groups([
            Group::make('caixa.nome')
                ->label('Caixas'),
            ])
            ->columns([
                Tables\Columns\TextColumn::make('tipo')
                    ->searchable()
                    ->badge()
                    ->color(static function ($state): string {
                        if ($state === 'CREDITO') {
                            return 'success';
                        }

                        return 'danger';
                    })
                    ->sortable(),
                Tables\Columns\TextColumn::make('valor')
                    ->summarize(Sum::make()->money('BRL')->label('Total'))
                    ->money('BRL'),
                Tables\Columns\TextColumn::make('caixa.nome')
                    ->label('Caixa')
                    ->searchable()
                    ->sortable(),
                Tables\Columns\TextColumn::make('obs')
                    ->label('Descrição')
                    ->searchable(),
                Tables\Columns\TextColumn::make('created_at')
                    ->label('Datae e Hora')
                    ->dateTime('d/m/Y H:i')
                    ->sortable(),
                // ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                Filter::make('CREDITO')
                    ->label('Crédito')
                    ->query(fn(Builder $query): Builder => $query->where('tipo', 'CREDITO')),
                Filter::make('DEBITO')
                    ->label('Débito')
                    ->query(fn(Builder $query): Builder => $query->where('tipo', 'DEBITO')),
                SelectFilter::make('caixa_id')
                    ->label('Caixa')
                    ->relationship('caixa', 'nome')
                    ->searchable()
                    ->preload()
                    ->placeholder('Todos os Caixas'),
                Tables\Filters\Filter::make('created_at')
                    ->form([
                        Forms\Components\DatePicker::make('data_de')
                            ->label('Data de:'),
                        Forms\Components\DatePicker::make('data_ate')
                            ->label('Data até:'),
                    ])
                    ->query(function ($query, array $data) {
                        return $query
                            ->when(
                                $data['data_de'],
                                fn($query) => $query->whereDate('created_at', '>=', $data['data_de'])
                            )
                            ->when(
                                $data['data_ate'],
                                fn($query) => $query->whereDate('created_at', '<=', $data['data_ate'])
                            );
                    })
            ])
            ->actions([
                Tables\Actions\EditAction::make()
                    ->modalHeading('Editar lançamento de caixa')
                    ->before(function ($record, $data) {
                        // Atualiza o saldo do caixa apenas com a diferença entre o valor antigo e o novo valor
                        $caixa = $record->caixa;
                       
                        if ($caixa) {
                            // Recupera o valor original do registro antes da edição
                            $originalValor = $record->valor;
                            $diferenca = $data['valor'] - $originalValor;
                            $caixa->saldo_atual += $diferenca;
                            $caixa->save();
                        }
                    
                    }),
                Tables\Actions\DeleteAction::make()
                    ->modalHeading('Excluir lançamento de caixa')
                    ->before(function ($record) {
                        // Ao excluir, subtrai o valor do lançamento do saldo_atual do caixa
                        $caixa = $record->caixa;

                        if ($caixa) {
                            $caixa->saldo_atual -= $record->valor;
                            $caixa->save();
                        }
                    }),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                  //  Tables\Actions\DeleteBulkAction::make(),
                ]),
            ])
            ->emptyStateActions([
                Tables\Actions\CreateAction::make(),
            ]);
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ManageFluxoCaixas::route('/'),
        ];
    }
}
