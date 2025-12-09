<?php

namespace App\Filament\Resources\LaporanFasilitas\Pages;

use App\Filament\Resources\LaporanFasilitas\LaporanFasilitasResource;
use Filament\Actions\EditAction;
use Filament\Resources\Pages\ViewRecord;

class ViewLaporanFasilitas extends ViewRecord
{
    protected static string $resource = LaporanFasilitasResource::class;

    protected function getHeaderActions(): array
    {
        return [
            EditAction::make(),
        ];
    }
}
