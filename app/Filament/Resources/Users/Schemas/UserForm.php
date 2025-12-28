<?php

namespace App\Filament\Resources\Users\Schemas;

use Filament\Forms\Components\Hidden;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\ToggleButtons;
use Filament\Schemas\Schema;

class UserForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                ToggleButtons::make('role')
                ->required()
                ->label('Role')
                ->default('1')
                ->inline()
                ->options([
                    '0' => 'Superadmin',
                    '1' => 'Admin'
                ])
                ->colors([
                    '0' => 'warning',
                    '1' => 'primary'
                ]),
                TextInput::make('name')
                ->required()
                ->label('Nama'),
                TextInput::make('email')
                ->required()
                ->label('Email'),
                TextInput::make('password')
                ->required()
            ]);
    }
}
