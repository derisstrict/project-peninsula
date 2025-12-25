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
            ->label(fn ($record) => $record->email_verified_at ? 'Hapus Verifikasi Email' : 'Verifikasi Email')
            ->color(fn ($record) => $record->email_verified_at ? 'danger' : 'primary')
            ->icon(Heroicon::Envelope)
            ->requiresConfirmation()
            ->modalHeading(fn ($record) => $record->email_verified_at ? 'Hilangkan Verifikasi Email' : 'Bypass Verifikasi Email')
            ->modalDescription(fn ($record) => $record->email_verified_at ? 'Email sudah terverifikasi. Apakah anda yakin ingin menghilangkan verifikasi email?' : 'Apakah anda yakin ingin melakukan bypass verifikasi email?')
            ->modalSubmitActionLabel('Iya')
            ->modalCancelActionLabel('Tidak')
            ->action(function ($record) {
                if ($record->email_verified_at) {
                    $record->update(['email_verified_at' => null]);
                } else  {
                    $record->markEmailAsVerified();
                }
            }),
        ];
    }
}
