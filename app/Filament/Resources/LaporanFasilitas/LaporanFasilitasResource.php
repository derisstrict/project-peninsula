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

    protected static ?string $modelLabel = 'Facility Report';

    protected static ?string $pluralModelLabel = 'Facility Reports';

    public static function infolist(Schema $schema): Schema
    {
        return $schema->components([
            Section::make('Facility Report')->schema([
                TextEntry::make('judul_laporan')
                ->label('Report title')
                ->weight(FontWeight::SemiBold)
                ->size(TextSize::Large)
                ->icon(Heroicon::InformationCircle),
                TextEntry::make('nama_pelapor')
                ->label('Submitter')
                ->icon(Heroicon::User)
                ->iconColor('gray'),
                TextEntry::make('email_pelapor')
                ->label('Submitter email')
                ->icon(Heroicon::Clipboard)
                ->tooltip('Email can be copied')
                ->copyMessage('Email has been copied!')
                ->copyMessageDuration(1000)
                ->copyable(),
                TextEntry::make('status_laporan')
                ->label('Report status')
                ->badge()
                ->color(fn (string $state): string => match ($state) {
                    '0' => 'gray',
                    '1' => 'warning',
                    '2' => 'success',
                })
                ->formatStateUsing(fn (string $state): string => match ($state) {
                    '0' => 'Unreviewed',
                    '1' => 'In progress',
                    '2' => 'Done',
                })
                ->icon(fn (string $state): string => match ($state) {
                    '0' => 'heroicon-m-eye',
                    '1' => 'heroicon-m-clock',
                    '2' => 'heroicon-m-check',
                }),
                TextEntry::make('created_at')
                ->label('Created at')
                ->badge()
                ->icon(Heroicon::Calendar)
                ->dateTime('d F Y')
            ])
            ->description('Basic information about the report')
            ->icon(Heroicon::Star)
            ->iconColor('primary'),
            Section::make('Description')->schema([
                TextEntry::make('deskripsi_laporan')
                ->hiddenLabel(),
            ])
            ->description('Description of the report')
            ->icon(Heroicon::DocumentText)
            ->iconColor('primary'),
            Section::make('Gambar')->schema([
                ImageEntry::make('foto_fasilitas')
                ->alignCenter()
                ->hiddenLabel()
                ->extraAttributes(['class' => 'w-full'])
                ->extraImgAttributes(['class' => 'h-120', 'style' => 'width: 100%; height: auto;'])
            ])
            ->description('Facility image(s)')
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
        return 'The amount of unreviewed report(s)';
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function canCreate(): bool
    {
        return true;
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
