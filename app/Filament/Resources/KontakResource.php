<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use App\Models\Kontak;
use Filament\Forms\Form;
use Filament\Tables\Table;
use Filament\Resources\Resource;
use Filament\Forms\Components\Fieldset;
use Illuminate\Database\Eloquent\Builder;
use App\Filament\Resources\KontakResource\Pages;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\KontakResource\RelationManagers;

class KontakResource extends Resource
{
    protected static ?string $model = Kontak::class;

    protected static ?string $navigationIcon = 'heroicon-o-building-storefront';


    protected static ?string $navigationGroup = 'Setting';

    protected static ?string $navigationLabel = 'Kontak';
    protected static ?string $pluralModelLabel = 'Kontak';

    protected ?string $heading = 'Kontak';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('title')
                    ->required(),

                Forms\Components\TextInput::make('email')
                    ->email()
                ,
                Forms\Components\TextInput::make('no_hp')
                ,
                Forms\Components\TextInput::make('sda_tv')
                ,
                Forms\Components\TextInput::make('twitter')
                ,
                Forms\Components\TextInput::make('youtube')
                ,
                Forms\Components\TextInput::make('instagram')
                ,
                Fieldset::make('Kontak')
                    ->schema([

                        Forms\Components\Textarea::make('alamat')
                            ->rows(10)
                            ->cols(20)
                        ,
                        Forms\Components\Textarea::make('gmap')->rows(10)
                            ->cols(20),
                    ])
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('title')
                ,

                Tables\Columns\TextColumn::make('email')
                ,
                Tables\Columns\TextColumn::make('no_hp')
                ,


            ])->paginated(false)
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
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
            'index' => Pages\ListKontaks::route('/'),
            // 'create' => Pages\CreateKontak::route('/create'),
            // 'edit' => Pages\EditKontak::route('/{record}/edit'),
        ];
    }
}
