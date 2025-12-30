<?php

namespace App\Filament\Resources\Spots;

use App\Filament\Resources\Spots\Pages\CreateSpot;
use App\Filament\Resources\Spots\Pages\EditSpot;
use App\Filament\Resources\Spots\Pages\ListSpots;
use App\Filament\Resources\Spots\Pages\ViewSpot;
use App\Filament\Resources\Spots\Schemas\SpotForm;
use App\Filament\Resources\Spots\Tables\SpotsTable;
use App\Models\Spot;
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
use Filament\Support\Enums\TextSize;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Contracts\Support\Htmlable;

class SpotResource extends Resource
{
    protected static ?string $model = Spot::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedMapPin;

    protected static ?string $recordTitleAttribute = 'kunci_judul';
    
    public static function getNavigationLabel(): string
    {
        return 'Spot';
    }

    public static function getPluralModelLabel(): string
    {
        return 'Spot';
    }

    public static function getRecordTitle(?Model $record): string|Htmlable|null
    {
        return __('spots.' . $record->kunci_judul);
    }

    public static function infolist(Schema $schema): Schema
    {
        $data = \App\Models\GeneralSetting::first();
        return $schema->components([
            Section::make('Spot')->schema([
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
                TextEntry::make('tampilkan_modal')
                ->label('Tampilkan modal')
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
                    '0' => 'Sembunyikan',
                    '1' => 'Tampilkan'
                }),
                Fieldset::make('Koordinat')->schema([
                    Grid::make(2)->schema([
                        TextEntry::make('xpos')
                        ->label('Koordinat X')
                        ->badge()
                        ->size(TextSize::Large)
                        ->color('primary'),
                        TextEntry::make('ypos')
                        ->label('Koordinat Y')
                        ->badge()
                        ->size(TextSize::Large)
                        ->color(Color::Fuchsia),
                    ]),
                ]),
                Fieldset::make('Judul')->schema([
                    TextEntry::make('kunci_judul')
                        ->badge()
                        ->size(TextSize::Large)
                        ->color(Color::Green),
                    Grid::make(1)->schema(function () use ($data) {
                        return collect($data->bahasa_tersedia)->map(fn ($locale_code, $local_name) => [
                            Grid::make(1)->schema([
                                TextEntry::make('kunci_judul_' . $locale_code)
                                ->hiddenLabel()
                                ->badge()
                                ->state('' . $local_name)
                                ->icon(Heroicon::GlobeAlt)
                                ->tooltip('Judul dari lokalisasi')
                                ->color('primary'),
                                TextEntry::make('kunci_judul_' . $locale_code)
                                ->hiddenLabel()
                                ->state(function ($record) use ($locale_code) {
                                    return __('spots.' . $record->kunci_judul, [], $locale_code);
                                }),        
                            ])->gap(false)
                        ])
                    ->flatten(1)
                    ->toArray();
                    }),        
                ])->columns(1),
                Fieldset::make('Teaser')->schema([
                    TextEntry::make('kunci_teaser')
                    ->badge()
                    ->size(TextSize::Large)
                    ->color(Color::Green),
                    Grid::make(1)->schema(function () use ($data) {
                        return collect($data->bahasa_tersedia)->map(fn ($locale_code, $local_name) => [
                            Grid::make(1)->schema([
                                TextEntry::make('kunci_teaser_' . $locale_code)
                                ->hiddenLabel()
                                ->badge()
                                ->state('' . $local_name)
                                ->icon(Heroicon::GlobeAlt)
                                ->tooltip('Teaser dari lokalisasi')
                                ->color('primary'),
                                TextEntry::make('kunci_teaser_' . $locale_code)
                                ->hiddenLabel()
                                ->state(function ($record) use ($locale_code) {
                                    return __('spots.' . $record->kunci_teaser, [], $locale_code);
                                }),        
                            ])->gap(false)
                        ])
                    ->flatten(1)
                    ->toArray();
                    }),    
                ])->columns(1),
                Fieldset::make('Keterangan')->schema([
                    TextEntry::make('kunci_keterangan')
                    ->badge()
                    ->size(TextSize::Large)
                    ->color(Color::Green),
                    Grid::make(1)->schema(function () use ($data) {
                        return collect($data->bahasa_tersedia)->map(fn ($locale_code, $local_name) => [
                            Grid::make(1)->schema([
                                TextEntry::make('kunci_keterangan_' . $locale_code)
                                ->hiddenLabel()
                                ->badge()
                                ->state('' . $local_name)
                                ->icon(Heroicon::GlobeAlt)
                                ->tooltip('Keterangan dari lokalisasi')
                                ->color('primary'),
                                TextEntry::make('kunci_keterangan_' . $locale_code)
                                ->hiddenLabel()
                                ->state(function ($record) use ($locale_code) {
                                    return __('spots.' . $record->kunci_keterangan, [], $locale_code);
                                }),        
                            ])->gap(false)
                        ])
                    ->flatten(1)
                    ->toArray();
                    }),
                ])->columns(1),
                Fieldset::make('Catatan')->schema([
                    TextEntry::make('kunci_catatan')
                    ->badge()
                    ->size(TextSize::Large)
                    ->color(Color::Green),
                    Grid::make(1)->schema(function () use ($data) {
                        return collect($data->bahasa_tersedia)->map(fn ($locale_code, $local_name) => [
                            Grid::make(1)->schema([
                                TextEntry::make('kunci_catatan_' . $locale_code)
                                ->hiddenLabel()
                                ->badge()
                                ->state('' . $local_name)
                                ->icon(Heroicon::GlobeAlt)
                                ->tooltip('Catatan dari lokalisasi')
                                ->color('primary'),
                                TextEntry::make('kunci_catatan_' . $locale_code)
                                ->hiddenLabel()
                                ->state(function ($record) use ($locale_code) {
                                    return __('spots.' . $record->kunci_catatan, [], $locale_code);
                                }),        
                            ])->gap(false)
                        ])
                    ->flatten(1)
                    ->toArray();
                    }),   
                ])->columns(1),
            ])
            ->description('Informasi mengenai spot')
            ->icon(Heroicon::Star)
            ->iconColor('primary'),
            Section::make('Gambar')->schema([
                ImageEntry::make('url_media')
                ->imageWidth('100%')
                ->imageHeight('100%')
                ->square(false)
                ->alignCenter()
                ->hiddenLabel()
                ->disk('public_img'),
                TextEntry::make('alt_gambar')
                ->badge()
                ->color('gray'),
            ])
            ->description('Gambar dari spot')
            ->icon(Heroicon::Photo)
            ->iconColor('primary'),
        ]);
    }

    public static function form(Schema $schema): Schema
    {
        return SpotForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return SpotsTable::configure($table);
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
            'index' => ListSpots::route('/'),
            'create' => CreateSpot::route('/create'),
            'edit' => EditSpot::route('/{record}/edit'),
            'view' => ViewSpot::route('/{record}/view'),
        ];
    }
}
