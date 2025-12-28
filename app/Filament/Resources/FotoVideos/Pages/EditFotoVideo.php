<?php

namespace App\Filament\Resources\FotoVideos\Pages;

use App\Filament\Resources\FotoVideos\FotoVideoResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditFotoVideo extends EditRecord
{
    protected static string $resource = FotoVideoResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}
