<?php

namespace App\Filament\Resources\Users\Tables;

use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteAction;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Actions\ViewAction;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class UsersTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('name')
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
                TextColumn::make('role')
                ->badge()
                ->searchable()
                ->sortable()
                ->formatStateUsing(fn (?string $state): string => match ($state) {
                    '0' => 'Superadmin',
                    '1' => 'Admin'
                })
                ->color(fn (?string $state): string => match ($state) {
                    '0' => 'warning',
                    '1' => 'primary' 
                }),
                TextColumn::make('email_verified_at')
                ->label('Email terverifikasi')
                ->badge()
                ->default('empty')
                ->formatStateUsing(function (?string $state) {
                    if ($state === 'empty') {
                        return 'Tidak terverifikasi';
                    } else {
                        return 'Terverifikasi';
                    }
                })
                ->color(function (?string $state) {
                    if ($state === 'empty') {
                        return 'gray';
                    } else {
                        return 'success';
                    }
                })
                ->icon(function (?string $state) {
                    if ($state === 'empty') {
                        return Heroicon::XMark;
                    } else {
                        return Heroicon::Check;
                    }
                }),
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
