<?php

namespace App\Filament\Resources\Events;

use App\Filament\Resources\Events\Pages\CreateEvent;
use App\Filament\Resources\Events\Pages\EditEvent;
use App\Filament\Resources\Events\Pages\ListEvents;
use App\Filament\Resources\Events\Pages\ViewEvent;
use App\Filament\Resources\Events\Schemas\EventForm;
use App\Filament\Resources\Events\Tables\EventsTable;
use App\Models\Event;
use BackedEnum;
use Filament\Infolists\Components\ImageEntry;
use Filament\Infolists\Components\TextEntry;
use Filament\Resources\Resource;
use Filament\Schemas\Components\Fieldset;
use Filament\Schemas\Components\Grid;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;
use Filament\Support\Enums\FontWeight;
use Filament\Support\Enums\Size;
use Filament\Support\Enums\TextSize;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class EventResource extends Resource
{
    protected static ?string $model = Event::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedStar;

    protected static ?string $recordTitleAttribute = 'judul_event';

    public static function getNavigationLabel(): string
    {
        return 'Event';
    }

    public static function getPluralModelLabel(): string
    {
        return 'Event';
    }

    public static function infolist(Schema $schema): Schema
    {
        return $schema->components([
            Section::make('Event')->schema([
                TextEntry::make('judul_event')
                ->weight(FontWeight::SemiBold)
                ->size(TextSize::Large)
                ->icon(Heroicon::InformationCircle),
                TextEntry::make('tampilkan_event')
                ->label('Visibilitas')
                ->badge()
                ->formatStateUsing(fn (string $state): string => match ($state) {
                    '0' => 'Sembunyikan',
                    '1' => 'Tampilkan'
                })
                ->color(fn (string $state): string => match ($state) {
                    '0' => 'gray',
                    '1' => 'primary'
                })
                ->icon(fn (string $state): string => match ($state) {
                    '0' => 'heroicon-o-eye-slash',
                    '1' => 'heroicon-o-eye'
                }),
                Grid::make(2)->schema([
                    TextEntry::make('tanggal_mulai')
                    ->badge()
                    ->icon(Heroicon::Calendar)
                    ->color('primary'),
                    TextEntry::make('tanggal_selesai')
                    ->badge()
                    ->icon(Heroicon::Calendar)
                    ->color('primary'),
                ]),
                TextEntry::make('nama_penyelenggara')
                ->icon(Heroicon::User)
                ->iconColor('gray'),
                TextEntry::make('harga_tiket')
                ->money('IDR', decimalPlaces: 0, locale: 'id')
                ->color('primary')
                ->size(TextSize::Large)
                ->weight(FontWeight::Bold),
            ])
            ->description('Informasi mengenai event')
            ->icon(Heroicon::Star)
            ->iconColor('primary'),
            Section::make('Gambar')->schema([
                ImageEntry::make('gambar_event'),
                TextEntry::make('alt_gambar')
                ->badge()
                ->color('gray'),
            ])
            ->description('Gambar dari event')
            ->icon(Heroicon::Photo)
            ->iconColor('primary'),
            Section::make('Deskripsi')->schema([
                TextEntry::make('deskripsi_event')
                ->hiddenLabel(),
            ])
            ->description('Deskripsi dari event')
            ->icon(Heroicon::DocumentText)
            ->iconColor('primary')
            ->columnSpanFull()
        ]);
    }

    public static function form(Schema $schema): Schema
    {
        return EventForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return EventsTable::configure($table);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => ListEvents::route('/'),
            'create' => CreateEvent::route('/create'),
            'view' => ViewEvent::route('/{record}'),
            'edit' => EditEvent::route('/{record}/edit'),
        ];
    }
}