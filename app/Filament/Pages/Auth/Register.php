<?php

namespace App\Filament\Pages\Auth;

use App\Models\User;
use App\Models\WhitelistUser;
use Filament\Actions\Action;
use Filament\Auth\Pages\Register as BaseRegister;
use Filament\Forms\Components\Hidden;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Components\Component;
use Filament\Schemas\Components\Icon;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Illuminate\Database\Eloquent\Model;

class Register extends BaseRegister
{
    public bool $isEmailExists = false;
    public bool $isNameExists = false;

    public function form(Schema $schema): Schema
    {
        return $schema
            ->components([
                $this->getNameFormComponent(),
                $this->getEmailFormComponent(),
                $this->getPasswordFormComponent(),
                $this->getPasswordConfirmationFormComponent(),
                Hidden::make('role')
                ->default(1),
            ]);
    }

    protected function getNameFormComponent(): Component
    {
        return TextInput::make('name')
            ->label(__('filament-panels::auth/pages/register.form.name.label'))
            ->required()
            ->maxLength(255)
            ->autofocus()
            ->live(onBlur: true)
            ->afterStateUpdated(function (?string $state, $livewire) {
                $livewire->isNameExists = WhitelistUser::where('nama', $state)->exists();
            });
    }

    protected function getEmailFormComponent(): Component
    {
        return TextInput::make('email')
            ->label(__('filament-panels::auth/pages/register.form.email.label'))
            ->email()
            ->live(onBlur: true)
            ->required()
            ->maxLength(255)
            ->unique($this->getUserModel())
            ->afterStateUpdated(function (?string $state, $livewire) {
                $livewire->isEmailExists = WhitelistUser::where('email', $state)->exists();
            });
    }

    public function getRegisterFormAction(): Action
    {
        return Action::make('register')
            ->label(__('filament-panels::auth/pages/register.form.actions.register.label'))
            ->submit('register')
            ->disabled(function () {
                return !($this->isNameExists && $this->isEmailExists);
            });
    }
}
