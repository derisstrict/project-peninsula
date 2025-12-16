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
use Illuminate\Database\Eloquent\Model;
use stdClass;

class SpotsTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('nama_spot')->label("Nama Spot")
                ->searchable()
                ->sortable()
                ->state(function (?Model $record) {
                    return __('spots.' . $record->kunci_judul);
                }),
                TextColumn::make('kunci_judul')->label("Kunci Judul")
                ->searchable()
                ->sortable()
                ->badge()
                ->color(Color::Green),
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
