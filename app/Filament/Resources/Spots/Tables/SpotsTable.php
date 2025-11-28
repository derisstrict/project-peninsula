<?php

namespace App\Filament\Resources\Spots\Tables;

use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Forms\Components\TextInput;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;


class SpotsTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('title')->label("Nama Spot"),
                TextColumn::make('xpos')->label("Koordinat X"),
                TextColumn::make('ypos')->label("Koordinat Y"),
                TextColumn::make('catatan')->label("Catatan"),
                TextColumn::make('keterangan')->label("Keterangan")->limit(100),
            ])
            ->filters([
                //
            ])
            ->recordActions([
                EditAction::make(),
            ])
            ->toolbarActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make(),
                ]),
            ]);
    }
}
