<?php

namespace App\Filament\Resources\LaporanFasilitas\Tables;

use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Actions\ViewAction;
use Filament\Support\Colors\Color;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class LaporanFasilitasTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('judul_laporan')
                ->searchable()
                ->sortable()
                ->label('Judul Laporan'),
                TextColumn::make('nama_pelapor')
                ->searchable()
                ->sortable()
                ->label('Nama Pelapor'),
                TextColumn::make('email_pelapor')
                ->searchable()
                ->sortable()
                ->label('Email Pelapor'),
                TextColumn::make('status_laporan')
                ->badge()
                ->searchable()
                ->sortable()
                ->label('Status Laporan')
                ->color(fn (string $state): string => match ($state) {
                    '0' => 'gray',
                    '1' => 'warning',
                    '2' => 'success',
                })
                ->formatStateUsing(fn (string $state): string => match ($state) {
                    '0' => 'Belum Ditanggapi',
                    '1' => 'Sedang Ditanggapi',
                    '2' => 'Selesai',
                })
                ->icon(fn (string $state): string => match ($state) {
                    '0' => 'heroicon-o-eye',
                    '1' => 'heroicon-o-clock',
                    '2' => 'heroicon-o-check',
                }),
                TextColumn::make('created_at')->dateTime('d M Y')->label('Tanggal Dibuat'),
            ])
            ->filters([
                //
            ])
            ->recordActions([
                ViewAction::make(),
                EditAction::make(),
            ])
            ->toolbarActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make(),
                ]),
            ]);
    }
}
