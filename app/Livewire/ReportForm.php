<?php

namespace App\Livewire;

use App\Models\LaporanFasilitas;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Hidden;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Components\Grid;
use Filament\Schemas\Concerns\InteractsWithSchemas;
use Filament\Schemas\Contracts\HasSchemas;
use Illuminate\Contracts\View\View;
use Filament\Schemas\Schema;
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
                    ->required(),
                    TextInput::make('email_pelapor')
                    ->required()
                    ->email(),
                ]),
                TextInput::make('judul_laporan'),
                Textarea::make('deskripsi_laporan')->rows(5),
                FileUpload::make('foto_fasilitas'),
            ])
            ->statePath('data');
    }
    
    public function create(): void
    {
        LaporanFasilitas::create($this->form->getState());
        // dd($this->form->getState());
    }
    
    public function render(): View
    {
        return view('livewire.report-form');
    }
}

