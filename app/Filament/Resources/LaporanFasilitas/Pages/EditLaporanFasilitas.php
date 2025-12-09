<?php

namespace App\Filament\Resources\LaporanFasilitas\Pages;

use App\Filament\Resources\LaporanFasilitas\LaporanFasilitasResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditLaporanFasilitas extends EditRecord
{
    protected static string $resource = LaporanFasilitasResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}
