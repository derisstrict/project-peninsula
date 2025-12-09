<?php

namespace App\Filament\Resources\ThingsToDos\Schemas;

use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Hidden;
use Filament\Forms\Components\FileUpload;
use Filament\Schemas\Components\Utilities\Get;
use Filament\Schemas\Components\Utilities\Set;
use Illuminate\Support\Str;
use Filament\Schemas\Schema;


class ThingsToDoForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Hidden::make('user_id')->default(fn () => auth()->id()),
                TextInput::make('title')
                    ->label('Judul')
                    ->required(),
                FileUpload::make('icon')->label('Upload Icon/Gambar')
                ->image()
                ->required()
                ->preserveFilenames(),
            ])->columns(1);
    }
}
