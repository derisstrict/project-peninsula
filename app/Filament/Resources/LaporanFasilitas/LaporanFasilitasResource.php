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
use Filament\Infolists\Components\ImageEntry;
use Filament\Infolists\Components\TextEntry;
use Filament\Resources\Resource;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;
use Filament\Support\Enums\FontWeight;
use Filament\Support\Enums\TextSize;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class LaporanFasilitasResource extends Resource
{
    protected static ?string $model = LaporanFasilitas::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedChatBubbleBottomCenterText;

    protected static ?string $recordTitleAttribute = 'judul_laporan';

    public static function infolist(Schema $schema): Schema
    {
        return $schema->components([
            Section::make('Laporan Fasilitas')->schema([
                TextEntry::make('judul_laporan')
                ->weight(FontWeight::SemiBold)
                ->size(TextSize::Large)
                ->icon(Heroicon::InformationCircle),
                TextEntry::make('nama_pelapor')
                ->icon(Heroicon::User)
                ->iconColor('gray'),
                TextEntry::make('email_pelapor')
                ->icon(Heroicon::Clipboard)
                ->tooltip('Copy email')
                ->copyable(),
                TextEntry::make('status_laporan')
                ->badge()
                ->color(fn (string $state): string => match ($state) {
                    '0' => 'gray',
                    '1' => 'warning',
                    '2' => 'success',
                })
                ->formatStateUsing(fn (string $state): string => match ($state) {
                    '0' => 'Belum Ditanggapi',
                    '1' => 'Sedang Ditanggapi',
                    '2' => 'Selesai',
                })
                ->icon(fn (string $state): string => match ($state) {
                    '0' => 'heroicon-o-eye',
                    '1' => 'heroicon-o-clock',
                    '2' => 'heroicon-o-check',
                }),
            ])
            ->description('Informasi mengenai pelapor')
            ->icon(Heroicon::Star)
            ->iconColor('primary'),
            Section::make('Deskripsi')->schema([
                TextEntry::make('deskripsi_laporan')
                ->hiddenLabel(),
            ])
            ->description('Deskripsi dari kerusakan fasilitas')
            ->icon(Heroicon::DocumentText)
            ->iconColor('primary'),
            Section::make('Gambar')->schema([
                ImageEntry::make('foto_fasilitas')
                ->alignCenter()
                ->hiddenLabel()
                ->extraAttributes(['class' => 'w-full'])
                ->extraImgAttributes(['class' => 'h-120', 'style' => 'width: 100%; height: auto;'])
            ])
            ->description('Gambar dari fasilitas')
            ->icon(Heroicon::Photo)
            ->iconColor('primary')
            ->columnSpanFull(),
        ]);
    }

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

    public static function canCreate(): bool
    {
        return false;
    }

    public static function getPages(): array
    {
        return [
            'index' => ListLaporanFasilitas::route('/'),
            // 'create' => CreateLaporanFasilitas::route('/create'),
            'view' => ViewLaporanFasilitas::route('/{record}'),
            'edit' => EditLaporanFasilitas::route('/{record}/edit'),
        ];
    }
}
