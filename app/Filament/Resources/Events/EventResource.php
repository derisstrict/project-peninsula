<?php

namespace App\Filament\Resources\Events;

use App\Filament\Resources\Events\Pages\CreateEvent;
use App\Filament\Resources\Events\Pages\EditEvent;
use App\Filament\Resources\Events\Pages\ListEvents;
use App\Filament\Resources\Events\Pages\ViewEvent;
use App\Filament\Resources\Events\Schemas\EventForm;
use App\Filament\Resources\Events\Tables\EventsTable;
use App\Models\Event;
use App\Models\User;
use BackedEnum;
use Filament\Infolists\Components\ImageEntry;
use Filament\Infolists\Components\TextEntry;
use Filament\Resources\Resource;
use Filament\Schemas\Components\Fieldset;
use Filament\Schemas\Components\Flex;
use Filament\Schemas\Components\Grid;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;
use Filament\Support\Colors\Color;
use Filament\Support\Enums\FontWeight;
use Filament\Support\Enums\Size;
use Filament\Support\Enums\TextSize;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Model;

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
                Grid::make(1)->schema([
                TextEntry::make('Dibuat oleh'),
                Flex::make([
                    TextEntry::make('id_user')
                    ->hiddenLabel()
                    ->icon(Heroicon::User)
                    ->formatStateUsing(fn (?string $state): string => match ($state) {
                        $state => User::find($state)->name
                    })->grow(false),
                    TextEntry::make('email')
                    ->hiddenLabel()
                    ->badge()
                    ->color(Color::Purple)
                    ->state(fn (?Model $record) => User::find($record->id_user)->email)
                    ->gap(2), 
                    ]),
                ])->gap(false),
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
                    '0' => 'heroicon-m-eye-slash',
                    '1' => 'heroicon-m-eye'
                }),
                TextEntry::make('created_at')
                ->dateTime('d F Y')
                ->label('Tanggal dibuat')
                ->badge()
                ->icon(Heroicon::Calendar),
                TextEntry::make('updated_at')
                ->dateTime('d F Y')
                ->label('Terakhir diubah')
                ->badge()
                ->icon(Heroicon::Calendar),
                Fieldset::make('Tanggal event')->schema([
                    TextEntry::make('tanggal_mulai')
                    ->badge()
                    ->icon(Heroicon::Calendar)
                    ->color('primary')
                    ->dateTime('d F Y'),
                    TextEntry::make('tanggal_selesai')
                    ->badge()
                    ->icon(Heroicon::Calendar)
                    ->color('primary')
                    ->dateTime('d F Y'),
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