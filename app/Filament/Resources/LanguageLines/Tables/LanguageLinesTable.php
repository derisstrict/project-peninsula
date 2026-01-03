<?php

namespace App\Filament\Resources\LanguageLines\Tables;

use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteAction;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class LanguageLinesTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('group')
                ->searchable()
                ->label('Group'),
                TextColumn::make('key')
                ->searchable()
                ->sortable()
                ->label('Key'),
                TextColumn::make('text')
                ->searchable()
                ->sortable()
                ->limit(50)
                ->label('Text')
            ])
            ->filters([
                //
            ])
            ->recordActions([
                EditAction::make(),
                DeleteAction::make()
            ])
            ->toolbarActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make(),
                ]),
            ])
            ->defaultGroup('group');
    }
}
