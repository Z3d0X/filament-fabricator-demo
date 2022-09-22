<?php

namespace App\Filament\Fabricator\PageBlocks;

use Filament\Forms\Components\Builder\Block;
use Filament\Forms\Components\Grid;
use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\TagsInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Z3d0X\FilamentFabricator\PageBlocks\PageBlock;

class PricingBlock extends PageBlock
{
    public static function getBlockSchema(): Block
    {
        return Block::make('pricing')
            ->schema([
                Repeater::make('plans')
                    ->columns(2)
                    ->schema([
                        TextInput::make('title')->required(),

                        TextInput::make('price')->numeric()->required(),

                        Textarea::make('features')
                            ->required()
                            ->columnSpan('full'),

                        TextInput::make('button_text')
                            ->label('Button Text')
                            ->required(fn ($get) => filled($get('button_url'))),
                        
                        TextInput::make('button_url')
                            ->label('Button URL')
                            ->url(),
                    ]),
            ]);
    }

    public static function mutateData(array $data): array
    {
        return $data;
    }
}