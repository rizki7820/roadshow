<?php

namespace App\Filament\Resources\IzinResource\Pages;

use App\Filament\Resources\IzinResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListIzins extends ListRecords
{
    protected static string $resource = IzinResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
