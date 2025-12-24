<?php

namespace App\Filament\Resources\Blogs\Tables;

use App\Models\User;
use Filament\Tables\Table;
use Filament\Actions\EditAction;
use Filament\Actions\ViewAction;
use Filament\Actions\DeleteAction;
use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;

class BlogsTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('judul_blog')
                ->searchable()
                ->sortable()
                ->label('Judul Blog'),
                ImageColumn::make('gambar_blog')
                ->label('Gambar')
                ->disk('public')
                ->square()
                ->stacked()
                ->limit(3)
                ->limitedRemainingText(),
                TextColumn::make('id_user')
                ->label('Dibuat Oleh')
                ->icon(Heroicon::User)
                ->formatStateUsing(fn (?string $state): string => match ($state) {
                    $state => User::find($state)->name
                }),
                TextColumn::make('created_at')
                ->dateTime('d F Y')
                ->label('Tanggal Upload')
                ->searchable()
                ->badge()
                ->icon(Heroicon::Calendar)
                ->sortable(),
                TextColumn::make('isi_blog')
                ->limit(50)
                ->label('Isi Blog'),
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
