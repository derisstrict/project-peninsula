<?php

namespace App\Filament\Resources\ThingsToDos\Tables;

use App\Models\User;
use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteAction;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Actions\ViewAction;
use Filament\Support\Colors\Color;
use Filament\Support\Icons\Heroicon;
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
                ->label('Title')
                ->sortable()
                ->searchable()
                ->state(function (?Model $record) {
                    return __('things_to_do.' . $record->kunci_judul);
                }),
                TextColumn::make('kunci_judul')
                ->label('Title Key')
                ->badge()
                ->color(Color::Green)
                ->sortable()
                ->searchable(),
                ImageColumn::make('ikon')
                ->label('Icon')
                ->disk('public_img')
                ->square(),
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
