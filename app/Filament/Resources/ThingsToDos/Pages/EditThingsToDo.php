<?php

namespace App\Filament\Resources\ThingsToDos\Pages;

use App\Filament\Resources\ThingsToDos\ThingsToDoResource;
use Filament\Actions\DeleteAction;
use Filament\Actions\ViewAction;
use Filament\Resources\Pages\EditRecord;

class EditThingsToDo extends EditRecord
{
    protected static string $resource = ThingsToDoResource::class;

    protected function getHeaderActions(): array
    {
        return [
            ViewAction::make(),
            DeleteAction::make(),
        ];
    }
}
