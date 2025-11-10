<?php

namespace App\Filament\Resources\Events\Schemas;

use Directory;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Hidden;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Components\Fieldset;
use Filament\Schemas\Components\Grid;
use Filament\Schemas\Components\Utilities\Get;
use Filament\Schemas\Components\Utilities\Set;
use Filament\Schemas\Schema;
use Illuminate\Support\Str;

class EventForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Hidden::make('user_id')->default(fn () => auth()->id()),
                TextInput::make('judul_event')
                ->live(onBlur: true)
                ->afterStateUpdated(function (Get $get, Set $set, ?string $old, ?string $state) {
                    if (($get('slug') ?? '') !== Str::slug($old)) {
                        return;
                    }
                
                    $set('slug', Str::slug($state));
                })
                ->required(),
                TextInput::make('slug')->required(),
                Fieldset::make('Tanggal')->schema([
                    DatePicker::make('tanggal_mulai')->required(),
                    DatePicker::make('tanggal_selesai')->required(),
                ]),
                RichEditor::make('deskripsi_event')->required(),
                Grid::make(4)->schema([
                    TextInput::make('nama_penyelenggara'),
                    TextInput::make('harga_tiket')->prefix('Rp.')
                ]),
                FileUpload::make('gambar_event')->label('Upload gambar')->required()
            ])->columns(1);
    }
}
