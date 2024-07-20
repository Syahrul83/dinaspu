<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use App\Models\Halaman;
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


                ImageColumn::make('image')
                    ->height(50),
                Tables\Columns\TextColumn::make('user.name')
                    ->searchable(),
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
            'index' => Pages\ListHalamen::route('/'),
            'create' => Pages\CreateHalaman::route('/create'),
            'edit' => Pages\EditHalaman::route('/{record}/edit'),
        ];
    }
}
