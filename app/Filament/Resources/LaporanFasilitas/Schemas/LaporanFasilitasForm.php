<?php

namespace App\Filament\Resources\LaporanFasilitas\Schemas;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Hidden;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class LaporanFasilitasForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Hidden::make('id_user')->default(auth()->id()),
                FileUpload::make('foto_fasilitas')
                ->multiple()
                ->directory('img')
                ->visibility('public'),
                TextInput::make('judul_laporan'),
                Textarea::make('deskripsi_laporan'),
                TextInput::make('email_pelapor'),
                TextInput::make('nama_pelapor'),
                Select::make('status_laporan')
                ->options([
                    '0' => 'Belum Ditanggapi',
                    '1' => 'Sedang Ditanggapi',
                    '2' => 'Selesai',
                ]),
            ])->columns(1);
    }
}
