<?php

namespace App\Filament\Resources\ThingsToDos\Pages;

use App\Filament\Resources\FotoVideos\FotoVideoResource;
use Filament\Actions\EditAction;
use Filament\Resources\Pages\ViewRecord;

class ViewFotoVideo extends ViewRecord
{
    protected static string $resource = FotoVideoResource::class;

    protected function getHeaderActions(): array
    {
        return [
            EditAction::make(),
        ];
    }
}
