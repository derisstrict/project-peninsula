<?php

namespace App\Filament\Pages;

use App\Models\GeneralSetting;
use BackedEnum;
use Dom\Text;
use Filament\Actions\Action;
use Filament\Forms\Components\CodeEditor;
use Filament\Forms\Components\CodeEditor\Enums\Language;
use Filament\Forms\Components\ColorPicker;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Hidden;
use Filament\Forms\Components\KeyValue;
use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\TextInput;
use Filament\Notifications\Notification;
use Filament\Pages\Page;
use Filament\Schemas\Components\Actions;
use Filament\Schemas\Components\Fieldset;
use Filament\Schemas\Components\Form;
use Filament\Schemas\Components\Grid;
use Filament\Schemas\Components\Icon;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Components\Tabs;
use Filament\Schemas\Components\Tabs\Tab;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use UnitEnum;

class GeneralSettings extends Page
{
    protected string $view = 'filament.pages.general-settings';
    
    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedCog6Tooth;

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
                        Tab::make('Judul Halaman')
                        ->icon(Icon::make(Heroicon::OutlinedPencilSquare))
                        ->schema([
                            RichEditor::make('judul_utama')
                            ->toolbarButtons([])
                            ->label('Judul'),
                            ColorPicker::make('warna_aksen_judul_utama')
                            ->label('Warna Aksen'),
                        ]),
                        Tab::make('Bahasa Tersedia')
                        ->icon(Icon::make(Heroicon::OutlinedLanguage))
                        ->schema([
                            KeyValue::make('bahasa_tersedia')
                                ->label('Bahasa yang tersedia:')
                                ->keyLabel('Nama bahasa')
                                ->valueLabel('Kode bahasa')
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
