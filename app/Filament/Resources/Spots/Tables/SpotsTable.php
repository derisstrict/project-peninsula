<?php

namespace App\Filament\Resources\Spots\Tables;

use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteAction;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Actions\ViewAction;
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
                TextColumn::make('xpos')->label("Koordinat X")
                ->searchable()
                ->sortable(),
                TextColumn::make('ypos')->label("Koordinat Y")
                ->searchable()
                ->sortable(),
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
