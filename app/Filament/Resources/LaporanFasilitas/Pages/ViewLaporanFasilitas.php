<?php

namespace App\Filament\Resources\LaporanFasilitas\Pages;

use App\Filament\Resources\LaporanFasilitas\LaporanFasilitasResource;
use Filament\Actions\Action;
use Filament\Actions\EditAction;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Resources\Pages\ViewRecord;
use Illuminate\Support\Facades\Mail;

class ViewLaporanFasilitas extends ViewRecord
{
    protected static string $resource = LaporanFasilitasResource::class;

    protected function getHeaderActions(): array
    {
        return [
            EditAction::make(),
            Action::make('email')
            ->label('Kirim Email')
            ->icon('heroicon-o-envelope')
            ->schema([
                TextInput::make('to')
                ->label('Email penerima')
                ->default(function ($record) {
                    return $record->email_pelapor;
                })
                ->disabled(false),
                TextInput::make('subject')
                    ->label('Subjek')
                    ->required(),
                Textarea::make('message')
                    ->label('Pesan')
                    ->required()
                    ->rows(6),
            ])
            ->action(function (array $data, $record) {
                Mail::raw($data['message'], function ($mail) use ($record, $data) {
                    $mail->to($data['to'])
                        ->subject($data['subject']);
                });
            })
            ->modalHeading('Kirim Email')
            ->modalSubmitActionLabel('Kirim')
            ->modalCancelActionLabel('Batalkan')
        ];
    }
}
