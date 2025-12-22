<?php

namespace App\Filament\Resources\Users\Schemas;

use Filament\Forms\Components\Hidden;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class UserForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('name')
                ->required()
                ->label('Nama'),
                TextInput::make('email')
                ->required()
                ->label('Email'),
                Select::make('role')
                ->required()
                ->label('Role')
                ->options([
                    '0' => 'Superadmin',
                    '1' => 'Admin'
                ]),
                TextInput::make('password')
                ->required()
            ]);
    }
}
