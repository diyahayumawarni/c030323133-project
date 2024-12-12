<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ReviewPendaftaranResource\Pages;
use App\Models\ReviewPendaftaran;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;

class ReviewPendaftaranResource extends Resource
{
    protected static ?string $model = ReviewPendaftaran::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('pendaftaran_id')
                    ->label('ID Pendaftaran')
                    ->required()
                    ->numeric(),
                Forms\Components\TextInput::make('reviewer_id')
                    ->label('ID Reviewer')
                    ->required()
                    ->numeric(),
                Forms\Components\Textarea::make('catatan_review')
                    ->label('Catatan Review')
                    ->maxLength(65535),
                Forms\Components\Select::make('hasil_review')
                    ->label('Hasil Review')
                    ->options([
                        'diterima' => 'Diterima',
                        'ditolak' => 'Ditolak',
                    ])
                    ->required(),
                Forms\Components\DateTimePicker::make('created_at')
                    ->label('Dibuat Pada')
                    ->disabled(),
                Forms\Components\DateTimePicker::make('updated_at')
                    ->label('Diperbarui Pada')
                    ->disabled(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('pendaftaran_id')
                    ->label('ID Pendaftaran')
                    ->sortable(),
                Tables\Columns\TextColumn::make('reviewer_id')
                    ->label('ID Reviewer')
                    ->sortable(),
                Tables\Columns\TextColumn::make('catatan_review')
                    ->label('Catatan Review')
                    ->limit(50),
                Tables\Columns\TextColumn::make('hasil_review')
                    ->label('Hasil Review'),
                Tables\Columns\TextColumn::make('created_at')
                    ->label('Dibuat Pada')
                    ->dateTime(),
                Tables\Columns\TextColumn::make('updated_at')
                    ->label('Diperbarui Pada')
                    ->dateTime(),
            ])
            ->filters([
                Tables\Filters\SelectFilter::make('hasil_review')
                    ->label('Hasil Review')
                    ->options([
                        'diterima' => 'Diterima',
                        'ditolak' => 'Ditolak',
                    ]),
            ])
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
            'index' => Pages\ListReviewPendaftarans::route('/'),
            'create' => Pages\CreateReviewPendaftaran::route('/create'),
            'edit' => Pages\EditReviewPendaftaran::route('/{record}/edit'),
        ];
    }
}