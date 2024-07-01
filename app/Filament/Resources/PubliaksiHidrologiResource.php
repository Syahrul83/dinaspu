<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PubliaksiHidrologiResource\Pages;
use App\Filament\Resources\PubliaksiHidrologiResource\RelationManagers;
use App\Models\PubliaksiHidrologi;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class PubliaksiHidrologiResource extends Resource
{
    protected static ?string $model = PubliaksiHidrologi::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

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
                //
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
            'index' => Pages\ListPubliaksiHidrologis::route('/'),
            'create' => Pages\CreatePubliaksiHidrologi::route('/create'),
            'edit' => Pages\EditPubliaksiHidrologi::route('/{record}/edit'),
        ];
    }
}
