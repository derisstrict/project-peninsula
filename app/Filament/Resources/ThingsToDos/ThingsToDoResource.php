<?php

namespace App\Filament\Resources\ThingsToDos;

use App\Filament\Resources\ThingsToDos\Pages\CreateThingsToDo;
use App\Filament\Resources\ThingsToDos\Pages\EditThingsToDo;
use App\Filament\Resources\ThingsToDos\Pages\ListThingsToDos;
use App\Filament\Resources\ThingsToDos\Pages\ViewThingsToDo;
use App\Filament\Resources\ThingsToDos\Schemas\ThingsToDoForm;
use App\Filament\Resources\ThingsToDos\Tables\ThingsToDosTable;
use App\Models\ThingsToDo;
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
use Filament\Support\Enums\TextSize;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Contracts\Support\Htmlable;
use PhpParser\Node\Stmt\Label;

class ThingsToDoResource extends Resource
{
    protected static ?string $model = ThingsToDo::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    protected static ?string $recordTitleAttribute = 'kunci_judul';

    public static function getNavigationLabel(): string
    {
        return 'Things to Do';
    }

    public static function getPluralModelLabel(): string
    {
        return 'Things to Do';
    }

    public static function infolist(Schema $schema): Schema
    {
        $data = \App\Models\GeneralSetting::first();
        return $schema->components([
            Section::make('Things to Do')->schema([
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
                Fieldset::make('Title')->schema([
                    TextEntry::make('kunci_judul')
                    ->label('Title key')
                    ->badge()
                    ->color(Color::Green)
                    ->size(TextSize::Large),
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
                                    return __('things_to_do.' . $record->kunci_judul, [], $locale_code);
                                }),        
                            ])->gap(false)
                        ])
                    ->flatten(1)
                    ->toArray();
                    }),
                ])
                ->columns(1),
                Fieldset::make('Description')->schema([
                    TextEntry::make('kunci_deskripsi')
                    ->label('Description key')
                    ->badge()
                    ->color(Color::Green)
                    ->size(TextSize::Large),
                    Grid::make(1)->schema(function () use ($data) {
                        return collect($data->bahasa_tersedia)->map(fn ($locale_code, $local_name) => [
                            Grid::make(1)->schema([
                                TextEntry::make('kunci_deskripsi_' . $locale_code)
                                ->hiddenLabel()
                                ->badge()
                                ->state('' . $local_name)
                                ->icon(Heroicon::GlobeAlt)
                                ->tooltip('Description from localization')
                                ->color('primary'),
                                TextEntry::make('kunci_deskripsi' . $locale_code)
                                ->hiddenLabel()
                                ->state(function ($record) use ($locale_code) {
                                    return __('things_to_do.' . $record->kunci_deskripsi, [], $locale_code);
                                }),        
                            ])->gap(false)
                        ])
                    ->flatten(1)
                    ->toArray();
                    }),
                ])
                ->columns(1),
            ])
            ->description('Basic information about the list')
            ->icon(Heroicon::Star)
            ->iconColor('primary'),
            Section::make('Icon')->schema([
                ImageEntry::make('ikon')
                ->imageHeight(400)
                ->square(false)
                ->alignCenter()
                ->hiddenLabel()
                ->disk('public_img'),
            ])
            ->description('Icon of the list')
            ->icon(Heroicon::Photo)
            ->iconColor('primary'),
        ]);
    }

    public static function getRecordTitle(?Model $record): string|Htmlable|null
    {
        return __('things_to_do.' . $record->kunci_judul);
    }

    public static function form(Schema $schema): Schema
    {
        return ThingsToDoForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return ThingsToDosTable::configure($table);
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
            'index' => ListThingsToDos::route('/'),
            'create' => CreateThingsToDo::route('/create'),
            'edit' => EditThingsToDo::route('/{record}/edit'),
            'view' => ViewThingsToDo::route('/{record}'),
        ];
    }
}
