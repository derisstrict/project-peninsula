<?php

namespace App\Filament\Resources\Users\Pages;

use App\Filament\Resources\Users\UserResource;
use Filament\Actions\Action;
use Filament\Actions\DeleteAction;
use Filament\Actions\ViewAction;
use Filament\Resources\Pages\EditRecord;
use Filament\Support\Icons\Heroicon;

class EditUser extends EditRecord
{
    protected static string $resource = UserResource::class;

    protected function getHeaderActions(): array
    {
        return [
            ViewAction::make(),
            DeleteAction::make(),
            Action::make('Verifikasi email')
            ->icon(Heroicon::Envelope)
            ->requiresConfirmation()
            ->modalHeading('Bypass Verifikasi Email')
            ->modalDescription('Apakah anda yakin ingin melakukan bypass verifikasi email?')
            ->modalSubmitActionLabel('Iya')
            ->modalCancelActionLabel('Tidak')
            ->action(function ($record) {
                $record->markEmailAsVerified();
            }),
        ];
    }
}
