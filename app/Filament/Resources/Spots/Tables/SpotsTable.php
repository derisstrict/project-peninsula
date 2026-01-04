<?php

namespace App\Filament\Resources\Spots\Tables;

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

class SpotsTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('kunci_judul')
                ->label('Title Key')
                ->searchable()
                ->sortable()
                ->badge()
                ->color(Color::Green),
                TextColumn::make('nama_spot')
                ->label('Spot')
                ->searchable()
                ->sortable()
                ->badge()
                ->tooltip('Spot\'s name from localization')
                ->icon(Heroicon::GlobeAlt)
                ->state(function (?Model $record) {
                    return __('spots.' . $record->kunci_judul);
                }),
                ImageColumn::make('url_media')
                ->label('Image')
                ->disk('public_img')
                ->circular()
                ->stacked()
                ->limit(3)
                ->limitedRemainingText(),
                TextColumn::make('xpos')
                ->label('X Coordinate')
                ->searchable()
                ->sortable()
                ->badge(),
                TextColumn::make('ypos')
                ->label('Y Coordinate')
                ->searchable()
                ->sortable()
                ->badge()->color(Color::Fuchsia),
                TextColumn::make('tampilkan_modal')
                ->label('Show Modal')
                ->badge()
                ->icon(fn (?string $state): string => match ($state) {
                    '0' => 'heroicon-m-eye-slash',
                    '1' => 'heroicon-m-eye'
                })
                ->color(fn (?string $state): string => match ($state) {
                    '0' => 'gray',
                    '1' => 'primary'
                })
                ->formatStateUsing(fn (?string $state): string => match ($state) {
                    '0' => 'Hidden',
                    '1' => 'Show'
                }),
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
