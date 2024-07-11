<?php

namespace App\Filament\Resources;

use App\Filament\Resources\MajalahPesutResource\Pages;
use App\Filament\Resources\MajalahPesutResource\RelationManagers;
use App\Models\MajalahPesut;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class MajalahPesutResource extends Resource
{
    protected static ?string $model = MajalahPesut::class;

    protected static ?string $navigationIcon = 'heroicon-o-bookmark-square';


    protected static ?string $navigationGroup = 'Publikasi';

    protected static ?string $navigationLabel = 'Majalah Pesut';
    protected static ?string $pluralModelLabel = 'Majalah Pesut';

    protected ?string $heading = 'Majalah Pesut';

    protected static ?int $navigationSort = 4;

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('title'),

                Forms\Components\FileUpload::make('file')
                    ->uploadingMessage('Uploading attachment...')
                    ->acceptedFileTypes(['application/pdf'])
                    ->directory('majalah_pesut'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('No')->rowIndex(),
                Tables\Columns\TextColumn::make('title')->searchable(),
                Tables\Columns\TextColumn::make('file'),
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
            'index' => Pages\ListMajalahPesuts::route('/'),
            // 'create' => Pages\CreateMajalahPesut::route('/create'),
            // 'edit' => Pages\EditMajalahPesut::route('/{record}/edit'),
        ];
    }
}
