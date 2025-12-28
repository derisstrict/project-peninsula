<?php

namespace App\Filament\Resources\FotoVideos\Pages;

use App\Filament\Resources\FotoVideos\FotoVideoResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListFotoVideos extends ListRecords
{
    protected static string $resource = FotoVideoResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
