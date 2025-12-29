<?php

namespace App\Filament\Resources\FotoVideos;

use App\Filament\Resources\FotoVideos\Pages\CreateFotoVideos;
use App\Filament\Resources\FotoVideos\Pages\EditFotoVideos;
use App\Filament\Resources\FotoVideos\Pages\ListFotoVideos;
use App\Filament\Resources\FotoVideos\Schemas\FotoVideoForm;
use App\Filament\Resources\FotoVideos\Schemas\ViewFotoVideo;
use App\Filament\Resources\FotoVideos\Tables\FotoVideosTable;
use App\Models\FotoVideo;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class FotoVideoResource extends Resource
{
    protected static ?string $model = FotoVideo::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    protected static ?string $recordTitleAttribute = 'Galery';

    public static function form(Schema $schema): Schema
    {
        return FotoVideoForm::configure($schema);
        
    }

    public static function table(Table $table): Table
    {
        return FotoVideosTable::configure($table);
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
            'index' => ListFotoVideos::route('/'),
            'create' => CreateFotoVideos::route('/create'),
            'edit' => EditFotoVideos::route('/{record}/edit'),
        ];
    }
}
