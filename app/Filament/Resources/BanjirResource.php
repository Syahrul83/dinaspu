<?php

namespace App\Filament\Resources;

use App\Filament\Resources\BanjirResource\Pages;
use App\Filament\Resources\BanjirResource\RelationManagers;
use App\Models\Banjir;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class BanjirResource extends Resource
{
    protected static ?string $model = Banjir::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    protected static ?string $navigationGroup = 'Publikasi';

    protected static ?string $navigationLabel = 'Laporan Banjir';
    protected static ?string $pluralModelLabel = 'Laporan Banjir';

    protected ?string $heading = 'Laporan Banjir';
    protected static ?int $navigationSort = 2;

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                //
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
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
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListBanjirs::route('/'),
            'create' => Pages\CreateBanjir::route('/create'),
            'edit' => Pages\EditBanjir::route('/{record}/edit'),
        ];
    }
}
