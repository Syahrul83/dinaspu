<?php

namespace App\Filament\Resources;

use App\Filament\Resources\SdaResource\Pages;
use App\Filament\Resources\SdaResource\RelationManagers;
use App\Models\Sda;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class SdaResource extends Resource
{
    protected static ?string $model = Sda::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';



    protected static ?string $navigationGroup = 'Publikasi';

    protected static ?string $navigationLabel = 'Informasi SDA';
    protected static ?string $pluralModelLabel = 'Informasi SDA';

    protected ?string $heading = 'Informasi SDA';

    protected static ?int $navigationSort = 1;

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('title')->required(),

                Forms\Components\FileUpload::make('file')
                    ->uploadingMessage('Uploading attachment...')
                    ->acceptedFileTypes(['application/pdf'])
                    ->directory('sda_file'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('title'),
                Tables\Columns\TextColumn::make('menu url')
                    ->default(fn(Sda $sda) => '/sda/' . $sda->id ?? '')
                    ->copyable()
                    ->copyMessage('Color code copied')
                    ->copyMessageDuration(1500),
                Tables\Columns\TextColumn::make('file'),


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
            'index' => Pages\ListSdas::route('/'),
            // 'create' => Pages\CreateSda::route('/create'),
            // 'edit' => Pages\EditSda::route('/{record}/edit'),
        ];
    }
}
