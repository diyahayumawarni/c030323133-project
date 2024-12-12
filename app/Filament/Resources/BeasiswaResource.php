<?php

namespace App\Filament\Resources;

use App\Filament\Resources\BeasiswaResource\Pages;
use App\Models\Beasiswa;
use Filament\Forms;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\DatePicker;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Resources\Resource;

class BeasiswaResource extends Resource
{
    protected static ?string $model = Beasiswa::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Forms\Form $form): Forms\Form
    {
        return $form
            ->schema([
                TextInput::make('nama_beasiswa')
                    ->label('Nama Beasiswa')
                    ->required()
                    ->maxLength(150),

                Textarea::make('deskripsi')
                    ->label('Deskripsi')
                    ->maxLength(1000),

                DatePicker::make('batas_pendaftaran')
                    ->label('Batas Pendaftaran')
                    ->required(),

                TextInput::make('ipk_minimum')
                    ->label('IPK Minimum')
                    ->numeric()
                    ->required(),

                TextInput::make('usia_maximum')
                    ->label('Usia Maksimum')
                    ->numeric()
                    ->required(),

                TextInput::make('kuota')
                    ->label('Kuota')
                    ->numeric()
                    ->required(),
            ]);
    }

    public static function table(Tables\Table $table): Tables\Table
    {
        return $table
            ->columns([
                TextColumn::make('id')
                    ->label('ID')
                    ->sortable(),

                TextColumn::make('nama_beasiswa')
                    ->label('Nama Beasiswa')
                    ->searchable()
                    ->sortable(),

                TextColumn::make('deskripsi')
                    ->label('Deskripsi')
                    ->limit(50),

                TextColumn::make('batas_pendaftaran')
                    ->label('Batas Pendaftaran')
                    ->date(),

                TextColumn::make('ipk_minimum')
                    ->label('IPK Minimum'),

                TextColumn::make('usia_maximum')
                    ->label('Usia Maksimum'), // Kolom untuk IPK Maksimum

                TextColumn::make('kuota')
                    ->label('Kuota')
                    ->sortable(),

                TextColumn::make('created_at')
                    ->label('Dibuat Pada')
                    ->dateTime(),

                TextColumn::make('updated_at')
                    ->label('Diperbarui Pada')
                    ->dateTime(),
            ])
            ->filters([]) // Tambahkan filter jika diperlukan
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\DeleteBulkAction::make(),
            ]);
    }

    public static function getRelations(): array
    {
        return [];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListBeasiswas::route('/'),
            'create' => Pages\CreateBeasiswa::route('/create'),
            'edit' => Pages\EditBeasiswa::route('/{record}/edit'),
        ];
    }
}
