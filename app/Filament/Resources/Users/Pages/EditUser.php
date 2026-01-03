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
            // ViewAction::make(),
            DeleteAction::make(),
            Action::make('Verifikasi email')
            ->label(fn ($record) => $record->email_verified_at ? 'Remove Email Verification' : 'Verify Email')
            ->color(fn ($record) => $record->email_verified_at ? 'danger' : 'primary')
            ->icon(Heroicon::Envelope)
            ->requiresConfirmation()
            ->modalHeading(fn ($record) => $record->email_verified_at ? 'Remove Email Verification' : 'Bypass Email Verification')
            ->modalDescription(fn ($record) => $record->email_verified_at ? 'Email has been verified. Are you sure you want to remove email verification?' : 'Are you sure you want to bypass email verification?')
            ->modalSubmitActionLabel('Yes')
            ->modalCancelActionLabel('No')
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
