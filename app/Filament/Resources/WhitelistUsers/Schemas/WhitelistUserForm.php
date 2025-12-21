<?php

namespace App\Filament\Resources\WhitelistUsers\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class WhitelistUserForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('nama')
                ->required()
                ->label('Nama'),
                TextInput::make('email')
                ->required()
                ->label('Email'),
            ]);
    }
}
