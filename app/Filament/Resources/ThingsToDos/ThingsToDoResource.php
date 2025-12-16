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
use Illuminate\Database\Eloquent\Model;
use Illuminate\Contracts\Support\Htmlable;

class ThingsToDoResource extends Resource
{
    protected static ?string $model = ThingsToDo::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    protected static ?string $recordTitleAttribute = 'kunci_judul';

    public static function getRecordTitle(?Model $record): string|Htmlable|null
    {
        return __('things_to_do.' . $record->kunci_judul);
    }

    public static function form(Schema $schema): Schema
    {
        return ThingsToDoForm::configure($schema);
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
            'edit' => EditThingsToDo::route('/{record}/edit'),
        ];
    }
}
