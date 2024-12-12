<?php

namespace App\Filament\Resources;

use App\Filament\Resources\DokumenPendukungResource\Pages;
use App\Models\DokumenPendukung;
use Filament\Forms;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\BadgeColumn;
use Filament\Tables\Columns\TextColumn;

class DokumenPendukungResource extends Resource
{
    protected static ?string $model = DokumenPendukung::class;

    protected static ?string $navigationIcon = 'heroicon-o-folder';

    public static function form(Forms\Form $form): Forms\Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('pendaftaran_id')
                    ->label('ID Pendaftaran')
                    ->required()
                    ->numeric()
                    ->placeholder('Masukkan ID Pendaftaran'),

                Forms\Components\TextInput::make('nama_dokumen')
                    ->label('Nama Dokumen')
                    ->required()
                    ->placeholder('Masukkan Nama Dokumen'),

                Forms\Components\FileUpload::make('file_path')
                    ->label('Unggah Dokumen')
                    ->required()
                    ->directory('dokumen-pendukung')
                    ->placeholder('Pilih File Dokumen'),

                Forms\Components\Select::make('status_verifikasi')
                    ->label('Status Verifikasi')
                    ->options([
                        'belum' => 'Belum Diverifikasi',
                        'sudah' => 'Sudah Diverifikasi',
                    ])
                    ->default('belum')
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

                TextColumn::make('pendaftaran_id')
                    ->label('ID Pendaftaran')
                    ->sortable(),

                TextColumn::make('nama_dokumen')
                    ->label('Nama Dokumen')
                    ->searchable(),

                TextColumn::make('file_path')
                    ->label('Path Dokumen')
                    ->limit(30),

                BadgeColumn::make('status_verifikasi')
                    ->label('Status Verifikasi')
                    ->formatStateUsing(fn ($state) => match ($state){
                        'belum' => 'Belum Diverifikasi',
                        'sudah' => 'Sudah Diverifikasi',
    })
                    ->colors([
                        'danger' => 'belum', // Warna merah untuk status 'belum'
                        'success' => 'sudah', // Warna hijau untuk status 'sudah'
                    ]),

                TextColumn::make('created_at')
                    ->label('Dibuat Pada')
                    ->dateTime(),

                TextColumn::make('updated_at')
                    ->label('Diperbarui Pada')
                    ->dateTime(),
            ])
            ->filters([])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\DeleteBulkAction::make(),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            // Relasi tambahan dapat ditambahkan di sini jika diperlukan
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListDokumenPendukungs::route('/'),
            'create' => Pages\CreateDokumenPendukung::route('/create'),
            'edit' => Pages\EditDokumenPendukung::route('/{record}/edit'),
        ];
    }
}
