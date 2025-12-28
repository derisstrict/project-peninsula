<?php

namespace App\Filament\Resources\FotoVideos\Schemas;

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

class FotoVideoForm
{
    public static function configure(Schema $schema): Schema
{
    return $schema
        ->components([
            Hidden::make('id_user')
            ->default(fn () => auth()
            ->id()),

            // Tipe Media
            Select::make('tipe_media')
            ->label('Tipe Media')
            ->options(['foto' => 'Foto','video' => 'Video',])
            ->required(),
            
            // Keterangan
            RichEditor::make('keterangan')
            ->label('Isi Keterangan Foto/Video')
            ->required(),
            
            //upload 
            FileUpload::make('url_media')
            ->label('Upload gambar/video')
            ->disk('public')
            ->directory('foto_video')
            ->visibility('public')
            ->required()
            
            ])
        ->columns(1);
}
}
