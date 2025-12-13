<?php

namespace App\Filament\Resources\Spots\Tables;

use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteAction;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Actions\ViewAction;
use Filament\Support\Colors\Color;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;


class SpotsTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('title')->label("Nama Spot")
                ->searchable()
                ->sortable(),
                TextColumn::make('teaser')->label("Teaser")
                ->searchable()
                ->sortable(),
                ImageColumn::make('url_media')
                ->label('Gambar')
                ->disk('public_img')
                ->circular()
                ->stacked()
                ->limit(3)
                ->limitedRemainingText(),
                TextColumn::make('xpos')->label("Koordinat X")
                ->searchable()
                ->sortable()
                ->badge(),
                TextColumn::make('ypos')->label("Koordinat Y")
                ->searchable()
                ->sortable()
                ->badge()->color(Color::Fuchsia),
                TextColumn::make('catatan')->label("Catatan")
                ->searchable()
                ->sortable(),
                TextColumn::make('keterangan')->label("Keterangan")
                ->searchable()
                ->sortable()
                ->limit(100),
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
