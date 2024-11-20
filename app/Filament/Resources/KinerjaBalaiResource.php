<?php

namespace App\Filament\Resources;

use App\Filament\Resources\KinerjaBalaiResource\Pages;
use App\Filament\Resources\KinerjaBalaiResource\RelationManagers;
use App\Models\KinerjaBalai;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class KinerjaBalaiResource extends Resource
{
    protected static ?string $model = KinerjaBalai::class;
    protected static ?string $slug = 'pel-info-pengaduan';

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';



    protected static ?string $navigationGroup = 'Hasil Survey Kepuasan';

    protected static ?string $navigationLabel = 'Pelayanan Informasi dan Pengaduan';
    protected static ?string $pluralModelLabel = 'Pelayanan Informasi dan Pengaduan';

    protected ?string $heading = 'Pelayanan Informasi dan Pengaduan';

    protected static ?int $navigationSort = 1;


    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('title')->required(),
                Forms\Components\FileUpload::make('file')->required()
                    ->uploadingMessage('Uploading attachment...')
                    ->acceptedFileTypes(['application/pdf'])
                    ->directory('pel_info_pengaduan'),
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
            'index' => Pages\ListKinerjaBalais::route('/'),
            // 'create' => Pages\CreateKinerjaBalai::route('/create'),
            // 'edit' => Pages\EditKinerjaBalai::route('/{record}/edit'),
        ];
    }
}
