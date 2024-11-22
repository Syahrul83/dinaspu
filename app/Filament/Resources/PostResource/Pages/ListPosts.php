<?php

namespace App\Filament\Resources\PostResource\Pages;

use App\Models\Post;
use Filament\Actions;
use App\Models\Kategori;
use Filament\Resources\Components\Tab;
use App\Filament\Resources\PostResource;
use Filament\Resources\Pages\ListRecords;
use Illuminate\Database\Eloquent\Builder;

class ListPosts extends ListRecords
{
    protected static string $resource = PostResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }


    protected function getHeaderWidgets(): array
    {
        return PostResource::getWidgets();
    }


    public function getTabs(): array
    {

        $kategori = Kategori::where('active', 1)->pluck('title', 'id');

        $tabs = [
            null => Tab::make('All'),
        ];

        foreach ($kategori as $key => $value) {
            $tabs[$value] = Tab::make()->query(fn($query) => $query->where('kategori_id', $key));
        }

        return $tabs;


    }


    protected function getTableQuery(): Builder
    {


        $query = Post::query();
        // if (!in_array(auth()->user()->getRoleNames()->first(), ['super_admin', 'admin'])) {
        //     $query->where('user_id', auth()->user()->id);
        // }
        return $query;



    }
}
