<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use App\Models\Halaman;
use Filament\Forms\Get;
use App\Models\Menuitem;
use Filament\Forms\Form;
use Filament\Tables\Table;
use Filament\Resources\Resource;
use Filament\Tables\Columns\ImageColumn;
use Illuminate\Database\Eloquent\Builder;
use Filament\Forms\Components\ToggleButtons;
use AmidEsfahani\FilamentTinyEditor\TinyEditor;
use App\Filament\Resources\HalamanResource\Pages;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\HalamanResource\RelationManagers;

class HalamanResource extends Resource
{
    protected static ?string $model = Halaman::class;

    protected static ?string $navigationIcon = 'heroicon-o-document-text';



    protected static ?string $navigationGroup = 'Menu & Halaman';

    protected static ?string $navigationLabel = 'Halaman';
    protected static ?string $pluralModelLabel = 'Halaman';

    protected ?string $heading = 'Halaman';

    protected static ?int $navigationSort = 1;
    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Group::make()
                    ->schema([
                        Forms\Components\Section::make()
                            ->schema([
                                Forms\Components\TextInput::make('title')
                                    ->required(),
                                TinyEditor::make('body')
                                    ->fileAttachmentsDisk('public')
                                    ->fileAttachmentsVisibility('public')
                                    ->fileAttachmentsDirectory('uploads')
                                    ->profile('custom')
                                    ->ltr()
                                    ->columnSpan('full')
                                ,
                            ]),
                    ])
                    ->columnSpan(['lg' => 2]),
                Forms\Components\Group::make()
                    ->schema([
                        Forms\Components\Section::make()
                            ->schema([
                                Forms\Components\FileUpload::make('image')
                                    ->image()
                                    ->directory('halaman')
                                    ->maxSize(2024),
                                Forms\Components\Hidden::make('user_id')
                                    ->default(auth()->user()->id),
                                Forms\Components\ToggleButtons::make('active')
                                    ->options([
                                        '1' => 'Published',
                                        '0' => 'Draft',


                                    ])->default('1')
                                ,
                            ]),

                        Forms\Components\Section::make()
                            ->schema([
                                Forms\Components\Checkbox::make('link_active')
                                    ->label('Link Aktivasi')
                                    ->live()
                                    ->inline(),
                                Forms\Components\TextInput::make('link')
                                    ->hidden(fn(Get $get) => $get('link_active') == false)
                                    ->label('Link Website'),
                            ]),
                    ])
                    ->columnSpan(['lg' => 1]),


            ])->columns(3);

    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('No')->rowIndex(),
                Tables\Columns\TextColumn::make('title')
                    ->searchable(),


                Tables\Columns\TextColumn::make('Menu Name')
                    ->default(

                        function (Halaman $halaman) {
                            $url = '/page/' . $halaman->id;
                            $menu = Menuitem::where('url', $url)->first();
                            return $menu->title ?? '';

                        }
                    ),
                Tables\Columns\TextColumn::make('menu url')
                    ->default(fn(Halaman $halaman) => '/page/' . $halaman->id ?? '')
                    ->copyable()
                    ->copyMessage('Url Link Copied')
                    ->copyMessageDuration(1500),
                Tables\Columns\ToggleColumn::make('active'),

                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
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
            'index' => Pages\ListHalamen::route('/'),
            'create' => Pages\CreateHalaman::route('/create'),
            'edit' => Pages\EditHalaman::route('/{record}/edit'),
        ];
    }
}
