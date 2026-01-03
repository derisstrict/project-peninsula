<?php

namespace App\Filament\Resources\WhitelistUsers;

use App\Filament\Resources\WhitelistUsers\Pages\CreateWhitelistUser;
use App\Filament\Resources\WhitelistUsers\Pages\EditWhitelistUser;
use App\Filament\Resources\WhitelistUsers\Pages\ListWhitelistUsers;
use App\Filament\Resources\WhitelistUsers\Pages\ViewWhitelistUser;
use App\Filament\Resources\WhitelistUsers\Schemas\WhitelistUserForm;
use App\Filament\Resources\WhitelistUsers\Schemas\WhitelistUserInfolist;
use App\Filament\Resources\WhitelistUsers\Tables\WhitelistUsersTable;
use App\Models\WhitelistUser;
use BackedEnum;
use Filament\Infolists\Components\TextEntry;
use Filament\Resources\Resource;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Contracts\Support\Htmlable;

class WhitelistUserResource extends Resource
{
    protected static ?string $model = WhitelistUser::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedClipboardDocumentList;

    protected static ?string $recordTitleAttribute = 'nama';

    protected static ?string $modelLabel = 'User Whitelist';

    protected static ?string $pluralModelLabel = 'User Whitelist';

    public static function form(Schema $schema): Schema
    {
        return WhitelistUserForm::configure($schema);
    }

    public static function canAccess(): bool
    {
        return auth()->user()->role == 0;
    }

    public static function infolist(Schema $schema): Schema
    {
        return $schema->components([
            Section::make('Whitelist Pengguna')->schema([
                TextEntry::make('nama')
                ->label('Name'),
                TextEntry::make('email')
                ->icon(Heroicon::Clipboard)
                ->copyable()
                ->tooltip('Email can be copied')
                ->copyMessage('Email has been copied!')
                ->copyMessageDuration(1000)
                ->iconColor('gray'),
            ])
            ->description('Informasi mengenai pengguna')
            ->icon(Heroicon::Star)
            ->iconColor('primary'),
        ]);
    }

    public static function table(Table $table): Table
    {
        return WhitelistUsersTable::configure($table);
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
            'index' => ListWhitelistUsers::route('/'),
            'create' => CreateWhitelistUser::route('/create'),
            'view' => ViewWhitelistUser::route('/{record}'),
            'edit' => EditWhitelistUser::route('/{record}/edit'),
        ];
    }
}
