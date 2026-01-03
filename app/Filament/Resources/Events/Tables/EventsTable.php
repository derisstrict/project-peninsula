<?php

namespace App\Filament\Resources\Events\Tables;

use App\Models\User;
use Filament\Tables\Table;
use Filament\Actions\EditAction;
use Filament\Actions\ViewAction;
use Filament\Actions\DeleteAction;
use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Support\Icons\Heroicon;
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
                ->label('Title'),
                ImageColumn::make('gambar_event')
                ->label('Image')
                ->disk('public')
                ->square()
                ->stacked()
                ->limit(3)
                ->limitedRemainingText(),
                TextColumn::make('nama_penyelenggara')
                ->searchable()
                ->sortable()
                ->label('Organized By'),
                TextColumn::make('tanggal_mulai')
                ->date('d F Y')
                ->sortable()
                ->searchable()
                ->badge()
                ->icon(Heroicon::Calendar)
                ->label('Start Date'),
                TextColumn::make('tanggal_selesai')
                ->date('d F Y')
                ->sortable()
                ->searchable()
                ->badge()
                ->icon(Heroicon::Calendar)
                ->label('End Date'),
                TextColumn::make('harga_tiket')
                ->label('Ticket Price')
                ->money('IDR', decimalPlaces: 0, locale: 'id')
                ->sortable(),
                TextColumn::make('tampilkan_event')
                ->label('Visibility')
                ->sortable()
                ->badge()
                ->color(fn (string $state): string => match ($state) {
                    '0' => 'gray',
                    '1' => 'primary',
                })
                ->formatStateUsing(fn (string $state): string => match ($state) {
                    '0' => 'Hidden',
                    '1' => 'Show',
                })
                ->icon(fn (string $state): string => match ($state) {
                    '0' => 'heroicon-m-eye-slash',
                    '1' => 'heroicon-m-eye',
                }),
                TextColumn::make('id_user')
                ->label('Made By')
                ->icon(Heroicon::User)
                ->sortable()
                ->searchable()
                ->formatStateUsing(fn (?string $state): string => match ($state) {
                    $state => User::find($state)->name
                }),
                TextColumn::make('created_at')
                ->dateTime('d F Y')
                ->label('Created At')
                ->searchable()
                ->badge()
                ->icon(Heroicon::Calendar)
                ->sortable(),
                TextColumn::make('updated_at')
                ->dateTime('d F Y')
                ->label('Last Updated')
                ->searchable()
                ->badge()
                ->icon(Heroicon::Calendar)
                ->sortable(),
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
