<?php

namespace App\Filament\Resources\Galeri\Tables;

use App\Models\User;
use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteAction;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Actions\ViewAction;
use Filament\Forms\Components\TextInput;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class GaleriTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                ImageColumn::make('url_media')
                ->label('Gambar')
                ->disk('public_img')
                ->square(),
                TextColumn::make('alt_gambar')
                ->label('Alt Gambar'),
                TextColumn::make('id_user')
                ->label('Dibuat Oleh')
                ->icon(Heroicon::User)
                ->sortable()
                ->searchable()
                ->formatStateUsing(fn (?string $state): string => match ($state) {
                    $state => User::find($state)->name
                }),
                TextColumn::make('created_at')
                ->dateTime('d F Y')
                ->label('Tanggal Dibuat')
                ->searchable()
                ->badge()
                ->icon(Heroicon::Calendar)
                ->sortable(),
                TextColumn::make('updated_at')
                ->dateTime('d F Y')
                ->label('Terakhir Diubah')
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
