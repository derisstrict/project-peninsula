<?php

namespace App\Filament\Resources\Events\Tables;

use Filament\Tables\Table;
use Filament\Actions\EditAction;
use Filament\Actions\ViewAction;
use Filament\Actions\DeleteAction;
use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;

class EventsTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('judul_event')
                ->searchable()
                ->sortable()
                ->label('Judul Event'),
                ImageColumn::make('gambar_event')
                ->label('Gambar')
                ->disk('public')
                ->square()
                ->stacked()
                ->limit(3)
                ->limitedRemainingText(),
                TextColumn::make('nama_penyelenggara')
                ->searchable()
                ->sortable()
                ->label('Nama Penyelenggara'),
                TextColumn::make('tanggal_mulai')
                ->date('d M Y')
                ->sortable()
                ->searchable()
                ->label('Tanggal Mulai'),
                TextColumn::make('tanggal_selesai')
                ->date('d M Y')
                ->sortable()
                ->searchable()
                ->label('Tanggal Selesai'),
                TextColumn::make('harga_tiket')
                ->label('Harga Tiket')
                ->money('IDR', decimalPlaces: 0, locale: 'id')
                ->sortable()
            ])
            ->filters([
                //
            ])
            ->recordActions([
                ViewAction::make(),
                EditAction::make(),
                DeleteAction::make(),
            ])
            ->toolbarActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make(),
                ]),
            ]);
    }
}
