<?php

namespace App\Filament\Pages;

use App\Models\LandingPage;
use BackedEnum;
use Filament\Actions\Action;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Hidden;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\TextInput;
use Filament\Notifications\Notification;
use Filament\Pages\Page;
use Filament\Schemas\Components\Actions;
use Filament\Schemas\Components\Fieldset;
use Filament\Schemas\Components\Form;
use Filament\Schemas\Components\Grid;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;

class ManageLandingPage extends Page
{
    protected string $view = 'filament.pages.manage-landing-page';
    
    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedCog6Tooth;

    /**
     * @var array<string, mixed> | null
     */
    public ?array $data = [];

    public function mount(): void
    {
        $this->form->fill($this->getRecord()?->attributesToArray());
    }

    public function form(Schema $schema): Schema
    {
        return $schema
            ->components([
                Form::make([
                    Hidden::make('user_id')->default(fn () => auth()->id()),
                    Grid::make(4)->schema([
                        TextInput::make('jam_operasional')->required(),
                        TextInput::make('biaya_masuk')
                        ->prefix('Rp.')->belowContent('Tanpa tanda titik')
                        ->required()
                    ]),
                    Fieldset::make('Gambar')->schema([
                        FileUpload::make('gambar')
                        ->label('Upload gambar')
                        ->required()
                        ->disk('public_img')
                        ->directory('/')
                        ->preserveFilenames(),
                        TextInput::make('alt')
                        ->belowContent('Deskripsi singkat tentang gambar')
                        ->label('Alt gambar')
                        ->required()
                    ])
                    ->columns(1),
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
            $record = new LandingPage();
            $record->is_landingpage = true;
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
    
    public function getRecord(): ?LandingPage
    {
        return LandingPage::query()
            ->where('is_landingpage', true)
            ->first();
    }
}
