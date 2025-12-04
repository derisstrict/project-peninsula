<?php

namespace App\Filament\Resources\Blogs\Schemas;

use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Hidden;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;
use Illuminate\Support\Str;
use Filament\Schemas\Components\Utilities\Get;
use Filament\Schemas\Components\Utilities\Set;

class BlogForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Hidden::make('id_user')->default(auth()->id()),
                Hidden::make('slug')->required(),
                TextInput::make('judul_blog')
                ->live(onBlur: true)
                ->afterStateUpdated(function (Get $get, Set $set, ?string $old, ?string $state) {
                    if (($get('slug') ?? '') !== Str::slug($old)) {
                        return;
                    }
                
                    $set('slug', Str::slug($state));
                })->label('Judul Blog')->required(),
                RichEditor::make('isi_blog')->label('Ketik Isi Blog')->required(),
                FileUpload::make('gambar_blog')->label('Upload Gambar')->required()
            ])->columns(1);
    }
}
