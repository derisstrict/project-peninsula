<?php

namespace App\Filament\Resources\ThingsToDos\Tables;

use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteAction;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Actions\ViewAction;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Model;
use stdClass;

class ThingsToDosTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('title')
                ->label('Judul')
                ->state(function (?Model $record) {
                    return __('things_to_do.' . $record->kunci_judul);
                }),
                TextColumn::make('kunci_judul')
                ->label('Kunci Judul'),
                ImageColumn::make('ikon')
                ->label('Ikon')
                ->disk('public_img')
                ->square()
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
