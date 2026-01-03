<?php

namespace App\Filament\Resources\LaporanFasilitas\Schemas;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Hidden;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\ToggleButtons;
use Filament\Schemas\Schema;

class LaporanFasilitasForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Hidden::make('id_user')->default(auth()->id()),
                FileUpload::make('foto_fasilitas')
                ->label('Facility Image(s)')
                ->multiple()
                ->directory('img')
                ->visibility('public')
                ->required(),
                TextInput::make('judul_laporan')
                ->required()
                ->label('Report Title'),
                Textarea::make('deskripsi_laporan')
                ->required()
                ->label('Report Description'),
                TextInput::make('email_pelapor')
                ->required(),
                TextInput::make('nama_pelapor')
                ->label('Submitter')
                ->required(),
                ToggleButtons::make('status_laporan')
                ->label('Report Status')
                ->inline()
                ->required()
                ->options([
                    '0' => 'Unreviewed',
                    '1' => 'In progress',
                    '2' => 'Done',
                ])
                ->icons([
                    '0' => 'heroicon-m-eye',
                    '1' => 'heroicon-m-clock',
                    '2' => 'heroicon-m-check',
                ])
                ->colors([
                    '0' => 'gray',
                    '1' => 'warning',
                    '2' => 'success',
                ]),
            ])->columns(1);
    }
}
