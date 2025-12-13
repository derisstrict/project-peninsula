<?php

namespace App\Livewire;

use App\Models\LaporanFasilitas;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Hidden;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Notifications\Notification;
use Filament\Schemas\Components\Grid;
use Filament\Schemas\Components\Icon;
use Filament\Schemas\Concerns\InteractsWithSchemas;
use Filament\Schemas\Contracts\HasSchemas;
use Illuminate\Contracts\View\View;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Livewire\Component;

class ReportForm extends Component implements HasSchemas
{
    use InteractsWithSchemas;
    
    public ?array $data = [];
    
    public function mount(): void
    {
        $this->form->fill();
    }
    
    public function form(Schema $schema): Schema
    {
        return $schema
            ->components([
                Grid::make(2)->schema([
                    TextInput::make('nama_pelapor')
                    ->required()
                    ->minLength(2)
                    ->maxLength(100)
                    ->prefix(Icon::make(Heroicon::OutlinedUser)),
                    TextInput::make('email_pelapor')
                    ->required()
                    ->email()
                    ->minLength(2)
                    ->maxLength(100)
                    ->prefix(Icon::make(Heroicon::OutlinedEnvelope)),
                ]),
                TextInput::make('judul_laporan')
                ->required()
                ->prefix(Icon::make(Heroicon::OutlinedPencilSquare))
                ->minLength(2)
                ->maxLength(150),
                Textarea::make('deskripsi_laporan')
                ->rows(5)
                ->required(),
                FileUpload::make('foto_fasilitas')
                ->required()
                ->multiple()
                ->maxFiles(6)
                ->image()
                ->directory('img')
                ->visibility('public')
                ->belowContent(__('report.fu_note')),
            ])
            ->statePath('data');
    }
    
    public function create(): void
    {
        LaporanFasilitas::create($this->form->getState());
        Notification::make()
        ->title('Submitted')
        ->success()
        ->send();
        // dd($this->form->getState());
    }
    
    public function render(): View
    {
        return view('livewire.report-form');
    }
}

