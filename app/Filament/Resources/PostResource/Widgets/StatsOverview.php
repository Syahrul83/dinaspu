<?php

namespace App\Filament\Resources\PostResource\Widgets;

use App\Models\Post;
use Filament\Widgets\StatsOverviewWidget\Stat;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;

class StatsOverview extends BaseWidget
{
    protected function getStats(): array
    {
        return [
            Stat::make('Total Post', Post::select('id')->count()),
            Stat::make('Publish', Post::select('id')->where('status', '=', 'publish')->count()),
            Stat::make('Darft', Post::select('id')->where('status', '=', 'draft')->count()),
        ];
    }
}
