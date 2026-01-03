<?php

namespace App\Filament\Resources\Galeri;

use App\Filament\Resources\Galeri\Pages\CreateGaleri;
use App\Filament\Resources\Galeri\Pages\EditGaleri;
use App\Filament\Resources\Galeri\Pages\ListGaleri;
use App\Filament\Resources\Galeri\Pages\ViewGaleri;
use App\Filament\Resources\Galeri\Schemas\GaleriForm;
use App\Filament\Resources\Galeri\Tables\GaleriTable;
use App\Models\Galeri;
use App\Models\User;
use BackedEnum;
use Filament\Infolists\Components\ImageEntry;
use Filament\Infolists\Components\TextEntry;
use Filament\Resources\Resource;
use Filament\Schemas\Components\Flex;
use Filament\Schemas\Components\Grid;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;
use Filament\Support\Colors\Color;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Model;

class GaleriResource extends Resource
{
    protected static ?string $model = Galeri::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedCamera;

    // protected static ?string $recordTitleAttribute = 'url_media';

    protected static ?string $modelLabel = 'Gallery';

    protected static ?string $pluralModelLabel = 'Gallery';

    public static function infolist(Schema $schema): Schema
    {
        $data = \App\Models\GeneralSetting::first();
        return $schema->components([
            Section::make('Gallery')->schema([
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
                ->label('Terakhir diubah')
                ->badge()
                ->icon(Heroicon::Calendar),
            ])
            ->description('Basic information about the spot')
            ->icon(Heroicon::Star)
            ->iconColor('primary'),
            Section::make('Image')->schema([
                ImageEntry::make('url_media')
                ->imageWidth('100%')
                ->imageHeight(400)
                ->square(false)
                ->alignCenter()
                ->hiddenLabel()
                ->disk('public_img'),
                TextEntry::make('alt_gambar')
                ->label('Image alt')
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
        return GaleriForm::configure($schema);
        
    }

    public static function table(Table $table): Table
    {
        return GaleriTable::configure($table);
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
            'index' => ListGaleri::route('/'),
            'create' => CreateGaleri::route('/create'),
            'edit' => EditGaleri::route('/{record}/edit'),
            'view' => ViewGaleri::route('/{record}')
        ];
    }
}
