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
    
    protected static ?string $modelLabel = 'Spot';

    protected static ?string $pluralModelLabel = 'Spots';

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
                    TextEntry::make('Made by'),
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
                ->label('Created at')
                ->badge()
                ->icon(Heroicon::Calendar),
                TextEntry::make('updated_at')
                ->dateTime('d F Y')
                ->label('Last updated')
                ->badge()
                ->icon(Heroicon::Calendar),
                TextEntry::make('tampilkan_modal')
                ->label('Show modal')
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
                Fieldset::make('Coordinates')->schema([
                    Grid::make(2)->schema([
                        TextEntry::make('xpos')
                        ->label('X coordinate')
                        ->badge()
                        ->size(TextSize::Large)
                        ->color('primary'),
                        TextEntry::make('ypos')
                        ->label('Y coordinate')
                        ->badge()
                        ->size(TextSize::Large)
                        ->color(Color::Fuchsia),
                    ]),
                ]),
                Fieldset::make('Title')->schema([
                    TextEntry::make('kunci_judul')
                    ->label('Title key')
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
                                ->tooltip('Title from localization')
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
                    ->label('Teaser key')
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
                                ->tooltip('Teaser from localization')
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
                Fieldset::make('Description')->schema([
                    TextEntry::make('kunci_keterangan')
                    ->label('Description key')
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
                                ->tooltip('Description from localization')
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
                Fieldset::make('Note')->schema([
                    TextEntry::make('kunci_catatan')
                    ->label('Note key')
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
                                ->tooltip('Description from localization')
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
            ->description('Basic information about the spot')
            ->icon(Heroicon::Star)
            ->iconColor('primary'),
            Section::make('Image')->schema([
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
            ->description('Image of the spot')
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
