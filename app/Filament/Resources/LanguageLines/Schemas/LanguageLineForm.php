<?php

namespace App\Filament\Resources\LanguageLines\Schemas;

use Filament\Forms\Components\KeyValue;
use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Components\Text;
use Filament\Schemas\Schema;
use Filament\Support\Enums\FontWeight;

use function Laravel\Prompts\text;

class LanguageLineForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('group')
                ->label('Grup'),
                TextInput::make('key'),
                KeyValue::make('text')
                ->keyLabel('ID Bahasa')
                ->valueLabel('Text')
                ->addActionLabel('+ Tambah baris'),
                Text::make('Grup tersedia:')
                ->color('neutral')
                ->weight(FontWeight::Bold),
                Text::make('landing_page')
            ])->columns(1);
    }
}
