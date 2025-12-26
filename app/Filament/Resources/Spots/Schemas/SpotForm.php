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
                    ->label('Tampilkan modal')
                    ->required()
                    ->default('1')
                    ->inline()
                    ->belowContent('Tampilkan/sembunyikan tombol \'lihat selengkapnya\'')
                    ->options([
                    '1' => 'Tampilkan',   
                    '0' => 'Sembunyikan',
                    ])
                    ->icons([
                        '1' => 'heroicon-m-eye',
                        '0' => 'heroicon-m-eye-slash',
                    ]),
               ]), 
                Fieldset::make('Koordinat spot')->schema([
                   TextInput::make('xpos')->label("Koordinat X")->required(),
                   TextInput::make('ypos')->label("Koordinat Y")->required(),
                ]),
                Fieldset::make('Lokalisasi')->schema([
                        TextInput::make('kunci_judul')->label('Kunci Judul')->required(),
                        Textarea::make('kunci_teaser')->label('Kunci Teaser')->required(),
                        Textarea::make('kunci_catatan')->label('Kunci Catatan')->required(),
                        Textarea::make('kunci_keterangan')->label('Kunci Keterangan')->required(),
                ]), 
                Fieldset::make('Gambar')->schema([
                        FileUpload::make('url_media')
                        ->multiple()
                        ->label('Upload Gambar Gallery')
                        ->required()
                        ->disk('public_img')
                        ->directory('/spots')
                        ->preserveFilenames()
                        ->reorderable()
                        ->appendFiles(),
                        TextInput::make('alt_gambar')
                        ->belowContent('Deskripsi singkat tentang gambar')
                        ->label('Alt gambar')
                ]),       
            ])->columns(1);
    }
}
