<?php

namespace App\Filament\Resources\Events\Schemas;

use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Hidden;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\ToggleButtons;
use Filament\Schemas\Components\Fieldset;
use Filament\Schemas\Components\Grid;
use Filament\Schemas\Components\Icon;
use Filament\Schemas\Components\Utilities\Get;
use Filament\Schemas\Components\Utilities\Set;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Illuminate\Support\Str;

class EventForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Hidden::make('id_user')->default(fn () => auth()->id()),
                ToggleButtons::make('tampilkan_event')
                ->label('Visibility')
                ->required()
                ->default('1')
                ->inline()
                ->options([
                    '1' => 'Show',
                    '0' => 'Hidden',
                ])
                ->icons([
                    '1' => 'heroicon-m-eye',
                    '0' => 'heroicon-m-eye-slash',
                ]),
                ToggleButtons::make('event_pasti')
                ->label('Recurring event')
                ->required()
                ->default('0')
                ->inline()
                ->live()
                ->options([
                    '1' => 'Yes',
                    '0' => 'No',
                ]),
                TextInput::make('judul_event')
                ->live(onBlur: true)
                ->afterStateUpdated(function (Get $get, Set $set, ?string $old, ?string $state) {
                    if (($get('slug') ?? '') !== Str::slug($old)) {
                        return;
                    }
                
                    $set('slug', Str::slug($state));
                })
                ->label('Title')
                ->required(),
                Hidden::make('slug')->required(),
                TextInput::make('waktu_event_pasti')
                ->label('Recurring event time')
                ->hidden(function ($get) {
                    return !$get('event_pasti');
                })
                ->required(function ($get) {
                    return $get('event_pasti');
                })
                ->belowContent('e.g. Everyday | 12.00 PM - 14.00 PM'),
                Fieldset::make('Event\'s date')->schema([
                    DatePicker::make('tanggal_mulai')
                    ->label('Start date')
                    ->required(function ($get) {
                    return !$get('event_pasti');
                }),
                    DatePicker::make('tanggal_selesai')
                    ->label('End date')
                    ->required(function ($get) {
                    return !$get('event_pasti');
                }),
                ])
                ->hidden(function ($get) {
                    return $get('event_pasti');
                }),
                RichEditor::make('deskripsi_event')
                ->label('Description')
                ->required(),
                Grid::make(4)->schema([
                    TextInput::make('nama_penyelenggara')
                    ->label('Organized by')
                    ->required(),
                    TextInput::make('harga_tiket')
                    ->label('Ticket price')
                    ->prefix('Rp.')
                    ->belowContent('Without dot separator (e.g. 50000)')
                    ->required()
                ]),
                FileUpload::make('gambar_event')
                ->label('Upload image')->required()
                ->directory('events')
                ->visibility('public')
                ->image(), 
                Grid::make(4)->schema([
                    TextInput::make('alt_gambar')
                    ->label('Image alt')
                    ->belowContent('Describe the image in short'),
                ]),
            ])->columns(1);
    }
}
