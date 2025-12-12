<?php

namespace App\Filament\Resources\LaporanFasilitas\Pages;

use App\Filament\Resources\LaporanFasilitas\LaporanFasilitasResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListLaporanFasilitas extends ListRecords
{
    protected static string $resource = LaporanFasilitasResource::class;

    protected function getHeaderActions(): array
    {
        return [
            // CreateAction::make(),
        ];
    }
}
