<?php

namespace App\Filament\Resources;

use App\Filament\Resources\NotifikasiResource\Pages;
use App\Models\Notifikasi;
use Filament\Forms;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\BadgeColumn;
use Filament\Tables\Table;

class NotifikasiResource extends Resource
{
    protected static ?string $model = Notifikasi::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Forms\Form $form): Forms\Form
    {
        return $form
            ->schema([
                TextInput::make('user_id')
                    ->label('User ID')
                    ->required()
                    ->numeric(),
                TextInput::make('judul')
                    ->label('Judul')
                    ->required()
                    ->maxLength(255),
                Textarea::make('pesan')
                    ->label('Pesan')
                    ->required(),
                Select::make('status')
                    ->label('Status')
                    ->required()
                    ->options([
                        'dibaca' => 'Dibaca',
                        'belum_dibaca' => 'Belum Dibaca',
                    ])
                    ->default('belum_dibaca'),
                TextInput::make('created_at')
                    ->label('Tanggal Dibuat')
                    ->disabled(),
                TextInput::make('updated_at')
                    ->label('Tanggal Diperbarui')
                    ->disabled(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('id')
                    ->label('ID')
                    ->sortable()
                    ->searchable(),
                TextColumn::make('user_id')
                    ->label('User ID')
                    ->sortable()
                    ->searchable(),
                TextColumn::make('judul')
                    ->label('Judul')
                    ->sortable()
                    ->searchable(),
                TextColumn::make('pesan')
                    ->label('Pesan')
                    ->wrap()
                    ->searchable(),
                BadgeColumn::make('status')
                    ->label('Status')
                    ->sortable()
                    ->colors([
                        'success' => 'dibaca',
                        'danger' => 'belum_dibaca',
                    ]),
                TextColumn::make('created_at')
                    ->label('Tanggal Dibuat')
                    ->dateTime(),
                TextColumn::make('updated_at')
                    ->label('Tanggal Diperbarui')
                    ->dateTime(),
            ])
            ->filters([
                // Tambahkan filter jika diperlukan
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            // Relasi tambahan bisa ditambahkan di sini
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListNotifikasis::route('/'),
            'create' => Pages\CreateNotifikasi::route('/create'),
            'edit' => Pages\EditNotifikasi::route('/{record}/edit'),
        ];
    }
}