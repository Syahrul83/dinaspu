<?php

// namespace App\Filament\Resources;

// use App\Filament\Resources\MenuLinkResource\Pages;
// use App\Filament\Resources\MenuLinkResource\RelationManagers;
// use App\Models\MenuLink;
// use Filament\Forms;
// use Filament\Forms\Form;
// use Filament\Resources\Resource;
// use Filament\Tables;
// use Filament\Tables\Table;
// use Illuminate\Database\Eloquent\Builder;
// use Illuminate\Database\Eloquent\SoftDeletingScope;

// class MenuLinkResource extends Resource
// {
//     protected static ?string $model = MenuLink::class;

//     protected static ?string $navigationIcon = 'heroicon-o-link';
//     protected static ?string $navigationGroup = 'Menu & Halaman';

//     protected static ?string $navigationLabel = 'Menu Link';

//     protected ?string $heading = 'Menu Link';

//     protected static ?int $navigationSort = 2;
//     public static function form(Form $form): Form
//     {
//         return $form
//             ->schema([
//                 Forms\Components\TextInput::make('title')->required(),
//                 Forms\Components\TextInput::make('link'),

//             ]);
//     }

//     public static function table(Table $table): Table
//     {
//         return $table
//             ->columns([
//                 Tables\Columns\TextColumn::make('title')

//                     ->sortable(),
//                 Tables\Columns\TextColumn::make('link'),

//             ])
//             ->filters([
//                 //
//             ])
//             ->actions([
//                 Tables\Actions\EditAction::make(),
//                 Tables\Actions\DeleteAction::make()
//                     ->requiresConfirmation()
//             ])
//             ->bulkActions([
//                 Tables\Actions\BulkActionGroup::make([
//                     // Tables\Actions\DeleteBulkAction::make(),
//                 ]),
//             ]);
//     }

//     public static function getRelations(): array
//     {
//         return [
//             //
//         ];
//     }

//     public static function getPages(): array
//     {
//         return [
//             'index' => Pages\ListMenuLinks::route('/'),
//             // 'create' => Pages\CreateMenuLink::route('/create'),
//             // 'edit' => Pages\EditMenuLink::route('/{record}/edit'),
//         ];
//     }
// }
