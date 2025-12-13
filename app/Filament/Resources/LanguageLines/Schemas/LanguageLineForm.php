<?php

namespace App\Filament\Resources\LanguageLines\Schemas;

use Filament\Forms\Components\KeyValue;
use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Components\Grid;
use Filament\Schemas\Components\Text;
use Filament\Schemas\Schema;
use Filament\Support\Enums\FontWeight;
use Spatie\TranslationLoader\LanguageLine;

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
                Grid::make(4)->schema([
                    Text::make('landing_page'),
                    Text::make('video'),
                    Text::make('gallery'),
                    Text::make('maps'),
                    Text::make('things_to_do'),
                    Text::make('navbar'),
                    Text::make('footer'),
                    Text::make('events'),
                    Text::make('blogs'),
                    Text::make('events_detail'),
                    Text::make('blogs_detail'),
                    Text::make('report'),
                    Text::make('search_bar'),
                    Text::make('blogs_card'),
                    Text::make('common'),
                    Text::make('pagination'),
                ])  
            ])->columns(1);
    }
}
