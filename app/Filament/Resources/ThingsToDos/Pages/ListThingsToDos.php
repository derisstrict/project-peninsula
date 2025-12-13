<?php

namespace App\Filament\Resources\ThingsToDos\Pages;

use App\Filament\Resources\ThingsToDos\ThingsToDoResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListThingsToDos extends ListRecords
{
    protected static string $resource = ThingsToDoResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
