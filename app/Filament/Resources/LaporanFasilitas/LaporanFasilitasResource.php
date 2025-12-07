<?php

namespace App\Filament\Resources\LaporanFasilitas;

use App\Filament\Resources\LaporanFasilitas\Pages\CreateLaporanFasilitas;
use App\Filament\Resources\LaporanFasilitas\Pages\EditLaporanFasilitas;
use App\Filament\Resources\LaporanFasilitas\Pages\ListLaporanFasilitas;
use App\Filament\Resources\LaporanFasilitas\Pages\ViewLaporanFasilitas;
use App\Filament\Resources\LaporanFasilitas\Schemas\LaporanFasilitasForm;
use App\Filament\Resources\LaporanFasilitas\Tables\LaporanFasilitasTable;
use App\Models\LaporanFasilitas;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class LaporanFasilitasResource extends Resource
{
    protected static ?string $model = LaporanFasilitas::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    protected static ?string $recordTitleAttribute = 'judul_laporan';

    public static function form(Schema $schema): Schema
    {
        return LaporanFasilitasForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return LaporanFasilitasTable::configure($table);
    }

    public static function getNavigationBadge(): ?string
    {
        return static::getModel()::where('status_laporan', '0')->count();
    }

    public static function getNavigationBadgeTooltip(): ?string
    {
        return 'Jumlah yang belum ditanggapi';
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
            'index' => ListLaporanFasilitas::route('/'),
            'create' => CreateLaporanFasilitas::route('/create'),
            'view' => ViewLaporanFasilitas::route('/{record}'),
            'edit' => EditLaporanFasilitas::route('/{record}/edit'),
        ];
    }
}
