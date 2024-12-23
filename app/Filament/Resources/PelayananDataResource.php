<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PelayananDataResource\Pages;
use App\Filament\Resources\PelayananDataResource\RelationManagers;
use App\Models\PelayananData;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class PelayananDataResource extends Resource
{
    protected static ?string $model = PelayananData::class;
    protected static ?string $slug = 'pel-rekomtek';

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';
    protected static ?string $navigationGroup = 'Hasil Survey Kepuasan';

    protected static ?string $navigationLabel = 'Pelayanan Rekomtek';
    protected static ?string $pluralModelLabel = 'Pelayanan Rekomtek';

    protected ?string $heading = 'Pelayanan Rekomtek';

    protected static ?int $navigationSort = 3;

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('title')->required(),
                Forms\Components\FileUpload::make('file')->required()
                    ->uploadingMessage('Uploading attachment...')
                    ->acceptedFileTypes(['application/pdf'])
                    ->directory('pel_rekomtek'),
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
            ])
            ->filters([
                //
            ])->defaultSort('id', 'desc')
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
            'index' => Pages\ListPelayananData::route('/'),
            // 'create' => Pages\CreatePelayananData::route('/create'),
            // 'edit' => Pages\EditPelayananData::route('/{record}/edit'),
        ];
    }
}
