<?php

namespace App\Filament\Resources\WhitelistUsers\Pages;

use App\Filament\Resources\WhitelistUsers\WhitelistUserResource;
use Filament\Resources\Pages\CreateRecord;

class CreateWhitelistUser extends CreateRecord
{
    protected static string $resource = WhitelistUserResource::class;
}
