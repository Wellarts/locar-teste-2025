<?php

namespace App\Filament\Resources\CaixaResource\Pages;

use App\Filament\Resources\CaixaResource;
use Filament\Actions;
use Filament\Resources\Pages\ManageRecords;

class ManageCaixas extends ManageRecords
{
    protected static string $resource = CaixaResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
