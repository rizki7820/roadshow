<?php

namespace App\Filament\Resources;

use App\Filament\Resources\AkunResource\Pages;
use App\Models\Akun;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;

class AkunResource extends Resource
{
    protected static ?string $model = Akun::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';
    protected static ?string $navigationLabel = 'Absen';
    protected static ?string $modelLabel = 'Absen';
    protected static ?string $pluralModelLabel = 'Absen';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('nip')
                ->label('nip')
                ->required()
                ->maxLength(255)
                ->unique(ignorable: fn ($record) => $record)
                ->string(),

                Forms\Components\TextInput::make('nama')
                    ->label('Nama')
                    ->required()
                    ->maxLength(255)
                    ->string(),
                Forms\Components\TextInput::make('no_telfon')
                    ->label('No. Telepon')
                    ->tel()
                    ->required()
                    ->maxLength(20)
                    ->unique(ignorable: fn ($record) => $record),
                Forms\Components\TextInput::make('lokasi')
                    ->label('Lokasi')
                    ->required(),
                Forms\Components\FileUpload::make('unggah')
                    ->label('Foto')
                    ->image()
                    ->directory('uploads/fotos')
                    ->maxFiles(1)
                    ->enableOpen()
                    ->enableDownload(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('nip'),
                Tables\Columns\TextColumn::make('nama'),
                Tables\Columns\TextColumn::make('no_telfon'),
                Tables\Columns\TextColumn::make('lokasi'),
                Tables\Columns\TextColumn::make('unggah'),
            ])
            ->filters([
                ///
            ])
            ->actions([
                Tables\Actions\DeleteAction::make(),
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
        return [];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListAkuns::route('/'),
            'create' => Pages\CreateAkun::route('/create'),
            'edit' => Pages\EditAkun::route('/{record}/edit'),
        ];
    }
}
