<?php

namespace App\Filament\Resources;

use App\Filament\Resources\KekeringanResource\Pages;
use App\Filament\Resources\KekeringanResource\RelationManagers;
use App\Models\Kekeringan;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class KekeringanResource extends Resource
{
    protected static ?string $model = Kekeringan::class;

    protected static ?string $navigationIcon = 'heroicon-o-sun';


    protected static ?string $navigationGroup = 'Publikasi';

    protected static ?string $navigationLabel = 'Laporan Kekeringan';
    protected static ?string $pluralModelLabel = 'Laporan Kekeringan';

    protected ?string $heading = 'Laporan Kekeringan';
    protected static ?int $navigationSort = 3;

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('title'),

                Forms\Components\FileUpload::make('file')
                    ->uploadingMessage('Uploading attachment...')
                    ->acceptedFileTypes(['application/pdf'])
                    ->directory('kekeringan'),
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
            ])
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
            'index' => Pages\ListKekeringans::route('/'),
            // 'create' => Pages\CreateKekeringan::route('/create'),
            // 'edit' => Pages\EditKekeringan::route('/{record}/edit'),
        ];
    }
}
