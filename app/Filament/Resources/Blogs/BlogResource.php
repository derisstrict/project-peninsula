<?php

namespace App\Filament\Resources\Blogs;

use App\Filament\Resources\Blogs\Pages\CreateBlog;
use App\Filament\Resources\Blogs\Pages\EditBlog;
use App\Filament\Resources\Blogs\Pages\ListBlogs;
use App\Filament\Resources\Blogs\Schemas\BlogForm;
use App\Filament\Resources\Blogs\Tables\BlogsTable;
use App\Filament\Resources\Blogs\Pages\ViewBlog;
use App\Models\Blog;
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
use Filament\Support\Enums\FontWeight;
use Filament\Support\Enums\TextSize;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Model;

class BlogResource extends Resource
{
    protected static ?string $model = Blog::class;
    protected static ?string $recordTitleAttribute = 'judul_blog';

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedNewspaper;

    protected static ?string $modelLabel = 'Blog';

    protected static ?string $pluralModelLabel = 'Blogs';

    public static function infolist(Schema $schema): Schema
    {
        return $schema->components([
            Section::make('Blog')->schema([
                TextEntry::make('judul_blog')
                ->label('Title')
                ->weight(FontWeight::SemiBold)
                ->size(TextSize::Large)
                ->icon(Heroicon::InformationCircle),
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
                ->label('Last updated')
                ->badge()
                ->icon(Heroicon::Calendar),
            ])
            ->description('Basic information about the blog')
            ->icon(Heroicon::Star)
            ->iconColor('primary'),
            Section::make('Image')->schema([
                ImageEntry::make('gambar_blog')
                ->label('Image')
                ->hiddenLabel(),
                TextEntry::make('alt_gambar')
                ->label('Image alt')
                ->badge()
                ->color('gray'),
            ])
            ->description('Image of the blog')
            ->icon(Heroicon::Photo)
            ->iconColor('primary'),
            Section::make('Description')->schema([
                TextEntry::make('isi_blog')
                ->hiddenLabel(),
            ])
            ->description('Description of the blog')
            ->icon(Heroicon::DocumentText)
            ->iconColor('primary')
            ->columnSpanFull()
        ]);
    }

    public static function form(Schema $schema): Schema
    {
        return BlogForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return BlogsTable::configure($table);
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
            'index' => ListBlogs::route('/'),
            'create' => CreateBlog::route('/create'),
            'view' => ViewBlog::route('/{record}'),
            'edit' => EditBlog::route('/{record}/edit'),
        ];
    }
}
