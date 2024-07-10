<?php

namespace App\Filament\Widgets;

use App\Models\Post;
use Illuminate\Support\Facades\DB;
use Filament\Widgets\DoughnutChartWidget;

class KategoriChart extends DoughnutChartWidget
{
    protected static ?string $heading = 'Kategori Post';
    protected static ?string $maxHeight = '260px';

    protected function getData(): array
    {

        // $counts = Post::join('kategoris', 'kategoris.id', '=', 'posts.kategori_id')
        //     ->groupBy('posts.kategori_id')
        //     ->selectRaw('count(posts.id) as count, kategoris.title as label')
        //     ->get();


        $counts = DB::table('posts')
            ->select(DB::raw('count(posts.id) as count, kategoris.title as label'))
            ->join('kategoris', 'kategoris.id', '=', 'posts.kategori_id')
            ->groupBy('posts.kategori_id', 'kategoris.title')
            ->get();

        // Function to generate a random RGB color
        function generateRandomColor()
        {
            return 'rgb(' . rand(0, 255) . ',' . rand(0, 255) . ',' . rand(0, 255) . ')';
        }

        $backgroundColor = [];

        // Generate 10 random colors
        for ($i = 0; $i < 10; $i++) {
            $backgroundColor[] = generateRandomColor();
        }


        return [
            'datasets' => [
                [
                    'label' => 'Kategori',
                    'data' => $counts->pluck('count')->toArray(),
                    'backgroundColor' => $backgroundColor,
                    'hoverOffset' => 4
                ],
            ],
            'labels' => $counts->pluck('label')->toArray(),
        ];

    }

    protected function getType(): string
    {
        return 'doughnut';
    }
}
