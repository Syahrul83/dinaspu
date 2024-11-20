<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PelayananPerijinanResource\Pages;
use App\Filament\Resources\PelayananPerijinanResource\RelationManagers;
use App\Models\PelayananPerijinan;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class PelayananPerijinanResource extends Resource
{
    protected static ?string $model = PelayananPerijinan::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';
    protected static ?string $slug = 'pel-hidrologi-dan-kualitas-air';
    protected static ?string $navigationGroup = 'Hasil Survey Kepuasan';

    protected static ?string $navigationLabel = 'Pelayanan Hidrologi dan Kualitas Air';
    protected static ?string $pluralModelLabel = 'Pelayanan Hidrologi dan Kualitas Air';

    protected ?string $heading = 'Pelayanan Hidrologi dan Kualitas Air';

    protected static ?int $navigationSort = 2;

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('title')->required(),
                Forms\Components\FileUpload::make('file')->required()
                    ->uploadingMessage('Uploading attachment...')
                    ->acceptedFileTypes(['application/pdf'])
                    ->directory('pel_hidrologi'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('No')->rowIndex(),
                Tables\Columns\TextColumn::make('title')
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
                    Tables\Actions\DeleteBulkAction::make(),
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
            'index' => Pages\ListPelayananPerijinans::route('/'),
            // 'create' => Pages\CreatePelayananPerijinan::route('/create'),
            // 'edit' => Pages\EditPelayananPerijinan::route('/{record}/edit'),
        ];
    }
}
