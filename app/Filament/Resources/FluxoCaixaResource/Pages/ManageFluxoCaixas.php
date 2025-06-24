<?php

namespace App\Filament\Resources\FluxoCaixaResource\Pages;

use App\Filament\Resources\FluxoCaixaResource;
use Filament\Actions;
use Filament\Resources\Pages\ManageRecords;

class ManageFluxoCaixas extends ManageRecords
{
    protected static string $resource = FluxoCaixaResource::class;

    protected static ?string $title = 'Fluxo de Caixa';

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make()
                ->label('Lançamento')
                ->modalHeading('Lançamento')
                ->after(function ($record) {
                    // Atualiza o saldo do caixa após o lançamento
                    $caixa = \App\Models\Caixa::find($record->caixa_id);
                    if ($caixa) {
                        $caixa->saldo_atual += $record->valor;
                        $caixa->save();
                    }
                }),
        ];
    }
}
