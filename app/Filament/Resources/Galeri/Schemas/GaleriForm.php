<?php

namespace App\Filament\Resources\Galeri\Schemas;

use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Hidden;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Select;
use Filament\Schemas\Components\Fieldset;
use Filament\Schemas\Components\Grid;
use Filament\Schemas\Components\Icon;
use Filament\Schemas\Components\Utilities\Get;
use Filament\Schemas\Components\Utilities\Set;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Illuminate\Support\Str;

class GaleriForm
{
    public static function configure(Schema $schema): Schema
{
    return $schema
        ->components([
            Hidden::make('id_user')
            ->default(fn () => auth()
            ->id()),
            
            //upload 
            FileUpload::make('url_media')
            ->required()
            ->label('Upload image')
            ->disk('public_img')
            ->directory('/gallery')
            ->visibility('public')
            ->preserveFilenames()
            ->maxFiles(1)
            ->required(),
            Grid::make(4)->schema([
                    TextInput::make('alt_gambar')
                    ->label('Image alt')
                    ->belowContent('Describe the image in short'),
            ]),
        ])
        ->columns(1);
}
}
