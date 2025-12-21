<?php

namespace App\Filament\Resources\Blogs;

use App\Filament\Resources\Blogs\Pages\CreateBlog;
use App\Filament\Resources\Blogs\Pages\EditBlog;
use App\Filament\Resources\Blogs\Pages\ListBlogs;
use App\Filament\Resources\Blogs\Schemas\BlogForm;
use App\Filament\Resources\Blogs\Tables\BlogsTable;
use App\Filament\Resources\Blogs\Pages\ViewBlog;
use App\Models\Blog;
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

class BlogResource extends Resource
{
    protected static ?string $model = Blog::class;
    protected static ?string $recordTitleAttribute = 'judul_blog';

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedNewspaper;

    public static function getNavigationLabel(): string
    {
        return 'Blog';
    }

    public static function getPluralModelLabel(): string
    {
        return 'Blog';
    }

    public static function infolist(Schema $schema): Schema
    {
        return $schema->components([
            Section::make('Blog')->schema([
                TextEntry::make('judul_blog')
                ->weight(FontWeight::SemiBold)
                ->size(TextSize::Large)
                ->icon(Heroicon::InformationCircle),
                TextEntry::make('created_at')
                ->dateTime('d F Y')
                ->label('Tanggal upload')
                ->badge()
                ->icon(Heroicon::Calendar),
            ])
            ->description('Informasi mengenai blog')
            ->icon(Heroicon::Star)
            ->iconColor('primary'),
            Section::make('Gambar')->schema([
                ImageEntry::make('gambar_blog'),
                TextEntry::make('alt_gambar')
                ->badge()
                ->color('gray'),
            ])
            ->description('Gambar dari blog')
            ->icon(Heroicon::Photo)
            ->iconColor('primary'),
            Section::make('Deskripsi')->schema([
                TextEntry::make('isi_blog')
                ->hiddenLabel(),
            ])
            ->description('Deskripsi dari blog')
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
