<?php

namespace App\Filament\Resources\LaporanFasilitas\Tables;

use Filament\Actions\Action;
use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Actions\ViewAction;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Support\Colors\Color;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Support\Facades\Mail;

class LaporanFasilitasTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('judul_laporan')
                ->searchable()
                ->sortable()
                ->label('Report Title'),
                TextColumn::make('nama_pelapor')
                ->searchable()
                ->sortable()
                ->label('Submitter'),
                TextColumn::make('email_pelapor')
                ->searchable()
                ->sortable()
                ->label('Submitter Email')
                ->icon(Heroicon::OutlinedClipboard)
                ->copyable()
                ->tooltip('Email can be copied')
                ->copyMessage('Email has been copied!')
                ->copyMessageDuration(1000),
                TextColumn::make('status_laporan')
                ->badge()
                ->searchable()
                ->sortable()
                ->label('Report Status')
                ->color(fn (string $state): string => match ($state) {
                    '0' => 'gray',
                    '1' => 'warning',
                    '2' => 'success',
                })
                ->formatStateUsing(fn (string $state): string => match ($state) {
                    '0' => 'Unreviewed',
                    '1' => 'In progress',
                    '2' => 'Done',
                })
                ->icon(fn (string $state): string => match ($state) {
                    '0' => 'heroicon-m-eye',
                    '1' => 'heroicon-m-clock',
                    '2' => 'heroicon-m-check',
                }),
                TextColumn::make('created_at')
                ->dateTime('d F Y')
                ->label('Created at')
                ->badge()
                ->searchable()
                ->icon(Heroicon::Calendar)
                ->sortable(),
            ])
            ->filters([
                //
            ])
            ->recordActions([
                ViewAction::make(),
                EditAction::make(),
                Action::make('email')
                ->label('Send Email')
                ->icon(Heroicon::Envelope)
                ->color(Color::Amber)
                ->schema([
                    TextInput::make('to')
                    ->required()
                    ->default(function ($record) {
                        return $record->email_pelapor;
                    })
                    ->disabled(false),
                    TextInput::make('subject')
                        ->required(),
                    Textarea::make('message')
                        ->required()
                        ->rows(6),
                ])
                ->action(function (array $data, $record) {
                    Mail::raw($data['message'], function ($mail) use ($record, $data) {
                        $mail->to($data['to'])
                            ->subject($data['subject']);
                    });
                })
                ->modalHeading('Send Email')
            ])
            ->toolbarActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make(),
                ]),
            ]);
    }
}
