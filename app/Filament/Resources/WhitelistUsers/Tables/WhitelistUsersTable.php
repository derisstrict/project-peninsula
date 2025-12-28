<?php

namespace App\Filament\Resources\WhitelistUsers\Tables;

use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteAction;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Actions\ViewAction;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class WhitelistUsersTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('nama')
                ->label('Nama')
                ->searchable()
                ->sortable(),
                TextColumn::make('email')
                ->label('Email')
                ->searchable()
                ->sortable()
                ->icon(Heroicon::OutlinedClipboard)
                ->copyable()
                ->tooltip('Email dapat dicopy')
                ->copyMessage("Email sudah dicopy!"),
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
