<?php

namespace App\Filament\Resources\Spots\Schemas;

use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Hidden;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;
use Illuminate\Support\Str;
use Filament\Schemas\Components\Utilities\Get;
use Filament\Schemas\Components\Utilities\Set;
use Filament\Schemas\Components\Fieldset;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\ToggleButtons;
use Filament\Schemas\Components\Grid;

class SpotForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Hidden::make('id_user')->default(auth()->id()),
                Grid::make(3)->schema([
                    ToggleButtons::make('tampilkan_modal')
                    ->label('Show modal')
                    ->required()
                    ->default('1')
                    ->inline()
                    ->belowContent('Show or hide the \'See more\' button')
                    ->options([
                    '1' => 'Show',   
                    '0' => 'Hidden',
                    ])
                    ->icons([
                        '1' => 'heroicon-m-eye',
                        '0' => 'heroicon-m-eye-slash',
                    ]),
               ]), 
                Fieldset::make('Coordinates')->schema([
                   TextInput::make('xpos')
                   ->label('X coordinate')
                   ->required(),
                   TextInput::make('ypos')
                   ->label('Y coordinate')
                   ->required(),
                ]),
                Fieldset::make('Localization')->schema([
                        TextInput::make('kunci_judul')->label('Title key')->required(),
                        Textarea::make('kunci_teaser')->label('Teaser key')->required(),
                        Textarea::make('kunci_catatan')->label('Note key')->required(),
                        Textarea::make('kunci_keterangan')->label('Description key')->required(),
                ]), 
                Fieldset::make('Image')->schema([
                        FileUpload::make('url_media')
                        ->multiple()
                        ->label('Upload image(s)')
                        ->required()
                        ->disk('public_img')
                        ->directory('/spots')
                        ->maxFiles(7)
                        ->preserveFilenames()
                        ->reorderable()
                        ->appendFiles(),
                        TextInput::make('alt_gambar')
                        ->belowContent('Describe the image in short')
                        ->label('Image alt')
                ]),       
            ])->columns(1);
    }
}
