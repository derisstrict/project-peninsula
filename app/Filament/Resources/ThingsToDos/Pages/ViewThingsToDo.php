<?php

namespace App\Filament\Resources\ThingsToDos\Pages;

use App\Filament\Resources\ThingsToDos\ThingsToDoResource;
use Filament\Actions\EditAction;
use Filament\Resources\Pages\ViewRecord;

class ViewThingsToDo extends ViewRecord
{
    protected static string $resource = ThingsToDoResource::class;

    protected function getHeaderActions(): array
    {
        return [
            EditAction::make(),
        ];
    }
}
