<?php

namespace App\Filament\Resources\Users;

use App\Filament\Resources\Users\Pages\CreateUser;
use App\Filament\Resources\Users\Pages\EditUser;
use App\Filament\Resources\Users\Pages\ListUsers;
use App\Filament\Resources\Users\Pages\ViewUser;
use App\Filament\Resources\Users\Schemas\UserForm;
use App\Filament\Resources\Users\Schemas\UserInfolist;
use App\Filament\Resources\Users\Tables\UsersTable;
use App\Models\User;
use BackedEnum;
use Filament\Infolists\Components\TextEntry;
use Filament\Resources\Resource;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;
use Filament\Support\Enums\FontWeight;
use Filament\Support\Enums\TextSize;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;
use Illuminate\Support\Facades\Auth;

class UserResource extends Resource
{
    protected static ?string $model = User::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedUsers;

    protected static ?string $recordTitleAttribute = 'name';

    public static function getNavigationLabel(): string
    {
        return 'User';
    }

    public static function getPluralModelLabel(): string
    {
        return 'Users';
    }

    public static function canAccess(): bool
    {
        return auth()->user()->role == 0;
    }

    public static function infolist(Schema $schema): Schema
    {
        return $schema->components([
            Section::make('User')->schema([
                TextEntry::make('name')
                ->label('Name'),
                TextEntry::make('email')
                ->icon(Heroicon::Clipboard)
                ->copyable()
                ->tooltip('Email can be copied')
                ->copyMessage('Email has been copied!')
                ->copyMessageDuration(1000)
                ->iconColor('gray'),
                TextEntry::make('role')
                ->badge()
                ->formatStateUsing(fn (?string $state): string => match ($state) {
                    '0' => 'Superadmin',
                    '1' => 'Admin'
                })
                ->color(fn (?string $state): string => match ($state) {
                    '0' => 'warning',
                    '1' => 'primary'
                }),
            ])
            ->description('Basic information about the user')
            ->icon(Heroicon::Star)
            ->iconColor('primary'),
        ]);
    }

    public static function form(Schema $schema): Schema
    {
        return UserForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return UsersTable::configure($table);
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
            'index' => ListUsers::route('/'),
            'create' => CreateUser::route('/create'),
            'view' => ViewUser::route('/{record}'),
            'edit' => EditUser::route('/{record}/edit'),
        ];
    }
}
