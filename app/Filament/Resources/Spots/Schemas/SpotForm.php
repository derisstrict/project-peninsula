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
use Filament\Forms\Components\Textarea;

class SpotForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Hidden::make('user_id')->default(auth()->id()),
                TextInput::make('title')
                ->label('Nama Spot')->required(),
                Fieldset::make('Koordinat Spot')->schema([
                   TextInput::make('xpos')->label("Koordinat X")->required(),
                   TextInput::make('ypos')->label("Koordinat Y")->required(),
                ]),
               Fieldset::make('Gambar')->schema([
                        FileUpload::make('url_media')
                        ->multiple()
                        ->label('Upload Gambar Gallery')
                        ->required()
                        ->disk('public_img')
                        ->directory('/')
                        ->preserveFilenames()
                        ->reorderable()
                        ->appendFiles(),
                        TextInput::make('alt')
                        ->belowContent('Deskripsi singkat tentang gambar')
                        ->label('Alt gambar')
               ]),
                Textarea::make('catatan')->label('Catatan')->required(),
                Textarea::make('keterangan')->label('Keterangan')->required(),
                // RichEditor::make('keterangan')->label('Keterangan')->required(),

            ])->columns(1);
    }
}
