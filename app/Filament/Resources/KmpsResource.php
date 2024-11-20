<?php

namespace App\Filament\Resources;

use App\Filament\Resources\KmpsResource\Pages;
use App\Filament\Resources\KmpsResource\RelationManagers;
use App\Models\Kmps;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class KmpsResource extends Resource
{
    protected static ?string $model = Kmps::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';


    protected static ?string $navigationGroup = 'Menu & Halaman';

    protected static ?string $navigationLabel = 'Komunitas Peduli Sungai PDF';
    protected static ?string $pluralModelLabel = 'Komunitas Peduli Sungai PDF';

    protected ?string $heading = 'Komunitas Peduli Sungai PDF';
    protected static ?int $navigationSort = 2;



    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('nama_kmps')
                    ->maxLength(255)
                    ->required()
                    ->default(null),
                Forms\Components\TextInput::make('tahun_pendirian')
                    ->numeric()
                    ->default(null),
                Forms\Components\TextInput::make('nomor_akte_notaris')
                    ->maxLength(255)
                    ->default(null),
                Forms\Components\TextInput::make('wilayah_operasi')
                    ->maxLength(255)
                    ->default(null),
                Forms\Components\FileUpload::make('file')
                    ->uploadingMessage('Uploading attachment...')
                    ->acceptedFileTypes(['application/pdf'])
                    ->directory('kmps_file'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('No')->rowIndex(),
                Tables\Columns\TextColumn::make('nama_kmps')
                    ->searchable(),
                Tables\Columns\TextColumn::make('tahun_pendirian')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('nomor_akte_notaris')
                    ->searchable(),
                Tables\Columns\TextColumn::make('wilayah_operasi')
                    ->searchable(),
                Tables\Columns\TextColumn::make('file')
                    ->searchable(),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])->defaultSort('id', 'desc')
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make()
                    ->requiresConfirmation()
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    // Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListKmps::route('/'),
            // 'create' => Pages\CreateKmps::route('/create'),
            // 'edit' => Pages\EditKmps::route('/{record}/edit'),
        ];
    }
}
