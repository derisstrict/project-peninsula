<?php

namespace App\Filament\Resources\Users\Schemas;

use Filament\Forms\Components\Hidden;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\ToggleButtons;
use Filament\Resources\Pages\CreateRecord;
use Filament\Schemas\Schema;
use Illuminate\Database\Eloquent\Model;

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
                ->label('Name'),
                TextInput::make('email')
                ->required()
                ->label('Email'),
                TextInput::make('password')
                ->required(fn ($livewire) => $livewire instanceof CreateRecord)
                ->dehydrated(fn ($state) => filled($state))
                ->password()
                ->placeholder(fn ($livewire) => $livewire instanceof CreateRecord ? '' : 'Keep it empty to keep the current password')
            ]);
    }
}
