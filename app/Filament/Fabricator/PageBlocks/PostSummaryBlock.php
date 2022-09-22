<?php

namespace App\Filament\Fabricator\PageBlocks;

use App\Models\Post;
use Filament\Forms\Components\Builder\Block;
use Filament\Forms\Components\Select;
use Z3d0X\FilamentFabricator\PageBlocks\PageBlock;

class PostSummaryBlock extends PageBlock
{
    public static function getBlockSchema(): Block
    {
        return Block::make('post-summary')
            ->schema([
                Select::make('post')
                    ->options(fn () => Post::query()->pluck('title', 'id')),
            ])
            ->visible(fn ($get) => $get('../layout') == 'default');
    }

    public static function mutateData(array $data): array
    {
        $data['post'] = Post::find($data['post']);
        return $data;
    }
}