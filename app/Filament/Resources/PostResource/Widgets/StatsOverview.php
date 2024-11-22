<?php

namespace App\Filament\Resources\PostResource\Widgets;

use App\Models\Post;
use Filament\Widgets\StatsOverviewWidget\Stat;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;

class StatsOverview extends BaseWidget
{
    protected function getStats(): array
    {

        $user = auth()->user();
        $role = $user->getRoleNames()->first();
        $query = Post::select('id');

        // if ($role !== 'super_admin' && $role !== 'admin') {
        //     $query->where('user_id', $user->id);
        // }

        return [
            Stat::make('Total Post', (clone $query)->count()),
            Stat::make('Publish', (clone $query)->where('status', 'publish')->count()),
            Stat::make('Darft', (clone $query)->where('status', 'draft')->count()),
        ];

    }
}
