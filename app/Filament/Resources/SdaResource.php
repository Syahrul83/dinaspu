<?php

namespace App\Filament\Resources;

use App\Models\Sda;
use Filament\Forms;
use Filament\Tables;
use App\Models\Menuitem;
use Filament\Forms\Form;
use Filament\Tables\Table;
use Filament\Resources\Resource;
use Illuminate\Database\Eloquent\Builder;
use App\Filament\Resources\SdaResource\Pages;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\SdaResource\RelationManagers;

class SdaResource extends Resource
{
    protected static ?string $model = Sda::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';



    protected static ?string $navigationGroup = 'Menu & Halaman';

    protected static ?string $navigationLabel = 'Singel View PDF';
    protected static ?string $pluralModelLabel = 'Singel View PDF';

    protected ?string $heading = 'Singel View PDF';

    protected static ?int $navigationSort = 4;

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
                Tables\Columns\TextColumn::make('No')->rowIndex(),
                Tables\Columns\TextColumn::make('title'),
                Tables\Columns\TextColumn::make('Menu Name')
                    ->default(

                        function (Sda $sda) {
                            $url = '/singel-pdf/' . $sda->id;
                            $menu = Menuitem::where('url', $url)->first();
                            return $menu->title ?? '';

                        }
                    ),
                Tables\Columns\TextColumn::make('menu url')
                    ->default(fn(Sda $sda) => '/singel-pdf/' . $sda->id ?? '')
                    ->copyable()
                    ->copyMessage('Color code copied')
                    ->copyMessageDuration(1500),



            ])->paginated(true)
            ->defaultSort('id', 'desc')
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
            'index' => Pages\ListSdas::route('/'),
            // 'create' => Pages\CreateSda::route('/create'),
            // 'edit' => Pages\EditSda::route('/{record}/edit'),
        ];
    }
}
