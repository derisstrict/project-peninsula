<?php

namespace App\Filament\Resources\WhitelistUsers\Pages;

use App\Filament\Resources\WhitelistUsers\WhitelistUserResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListWhitelistUsers extends ListRecords
{
    protected static string $resource = WhitelistUserResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
