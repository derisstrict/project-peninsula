<?php

namespace App\Filament\Resources\ThingsToDos;

use App\Filament\Resources\ThingsToDos\Pages\CreateThingsToDo;
use App\Filament\Resources\ThingsToDos\Pages\EditThingsToDo;
use App\Filament\Resources\ThingsToDos\Pages\ListThingsToDos;
use App\Filament\Resources\ThingsToDos\Pages\ViewThingsToDo;
use App\Filament\Resources\ThingsToDos\Schemas\ThingsToDoForm;
use App\Filament\Resources\ThingsToDos\Schemas\ThingsToDoInfolist;
use App\Filament\Resources\ThingsToDos\Tables\ThingsToDosTable;
use App\Models\ThingsToDo;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class ThingsToDoResource extends Resource
{
    protected static ?string $model = ThingsToDo::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    protected static ?string $recordTitleAttribute = 'ThingsToDo';

    public static function form(Schema $schema): Schema
    {
        return ThingsToDoForm::configure($schema);
    }

    public static function infolist(Schema $schema): Schema
    {
        return ThingsToDoInfolist::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return ThingsToDosTable::configure($table);
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
            'index' => ListThingsToDos::route('/'),
            'create' => CreateThingsToDo::route('/create'),
            'view' => ViewThingsToDo::route('/{record}'),
            'edit' => EditThingsToDo::route('/{record}/edit'),
        ];
    }
}
