<?php

namespace App\Filament\Pages;

use App\Models\GeneralSetting;
use BackedEnum;
use Filament\Actions\Action;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\KeyValue;
use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\TextInput;
use Filament\Notifications\Notification;
use Filament\Pages\Page;
use Filament\Schemas\Components\Actions;
use Filament\Schemas\Components\Form;
use Filament\Schemas\Components\Grid;
use Filament\Schemas\Components\Icon;
use Filament\Schemas\Components\Tabs;
use Filament\Schemas\Components\Tabs\Tab;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use UnitEnum;

class GeneralSettings extends Page
{
    protected string $view = 'filament.pages.general-settings';
    
    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedCog6Tooth;

    protected static ?string $navigationLabel = 'General Settings';

    /**
     * @var array<string, mixed> | null
     */
    public ?array $data = [];

    public function mount(): void
    {
        $this->form->fill($this->getRecord()?->attributesToArray());
    }

    protected static string | UnitEnum | null $navigationGroup = 'Settings';

    public function form(Schema $schema): Schema
    {
        return $schema
            ->components([
                Form::make([
                    Tabs::make()->tabs([
                        Tab::make('Main Title')
                        ->icon(Icon::make(Heroicon::OutlinedPencilSquare))
                        ->schema([
                            Repeater::make('judul_utama')
                            ->simple(
                                TextInput::make('Judul'),
                                TextInput::make('Judul Aksen'),
                            )
                            ->reorderable(false)
                            ->label('Main title:')
                            ->maxItems(3),
                        ]),
                        Tab::make('Available Languages')
                        ->icon(Icon::make(Heroicon::OutlinedLanguage))
                        ->schema([
                            KeyValue::make('bahasa_tersedia')
                                ->label('Available languages:')
                                ->keyLabel('Language name')
                                ->valueLabel('Language code')
                        ]),
                        Tab::make('Hero Image')
                        ->icon(Icon::make(Heroicon::OutlinedPhoto))
                        ->schema([
                            FileUpload::make('gambar_hero')
                            ->label('Image')
                            ->required()
                            ->disk('public_img')
                            ->visibility('public')
                            ->preserveFilenames(),
                            Grid::make(4)->schema([
                                TextInput::make('gambar_hero_alt')
                                ->label('Hero image alt')
                                ->belowContent('Describe the image in short'),
                            ]),
                        ]),
                        Tab::make('Home Video')
                        ->icon(Icon::make(Heroicon::OutlinedPhoto))
                        ->schema([
                            FileUpload::make('video_home_thumbnail')
                            ->label('Video thumbnail')
                            ->required()
                            ->disk('public_img')
                            ->image()
                            ->visibility('public')
                            ->preserveFilenames(),
                            FileUpload::make('video_home')
                            ->label('Video')
                            ->acceptedFileTypes(['video/mp4'])
                            ->required()
                            ->disk('public_img')
                            ->visibility('public')
                            ->preserveFilenames()
                            ->belowContent('Uploaded file maximum size is ~11MB'),
                        ])
                    ]),
                ])->columns(1)
                    ->livewireSubmitHandler('save')
                    ->footer([
                        Actions::make([
                            Action::make('save')
                                ->submit('save')
                                ->keyBindings(['mod+s']),
                        ]),
                    ]),
            ])
            ->record($this->getRecord())
            ->statePath('data');
    }

    public function save(): void
    {
        $data = $this->form->getState();
        
        $record = $this->getRecord();
        
        if (! $record) {
            $record = new GeneralSetting();
            $record->is_gs = true;
        }
        
        $record->fill($data);
        $record->save();
        
        if ($record->wasRecentlyCreated) {
            $this->form->record($record)->saveRelationships();
        }

        Notification::make()
            ->success()
            ->title('Saved')
            ->send();
    }
    
    public function getRecord(): ?GeneralSetting
    {
        return GeneralSetting::query()
            ->where('is_gs', true)
            ->first();
    }
}
