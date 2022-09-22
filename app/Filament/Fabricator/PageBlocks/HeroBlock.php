<?php

namespace App\Filament\Fabricator\PageBlocks;

use Filament\Forms\Components\Builder\Block;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Grid;
use Filament\Forms\Components\Group;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Illuminate\Support\Facades\Storage;
use Z3d0X\FilamentFabricator\PageBlocks\PageBlock;

class HeroBlock extends PageBlock
{
    public static function getBlockSchema(): Block
    {
        return Block::make('hero')
            ->columns(2)
            ->schema([
                Group::make([
                    TextInput::make('title')
                        ->label('Title')
                        ->required(),

                    Textarea::make('description')
                        ->label('Description')
                        ->required(),
                ]),

                Group::make([
                    FileUpload::make('image')
                        ->label('Image')
                        ->required(),
                ]),

                Grid::make()
                    ->schema([
                        TextInput::make('button_text')
                            ->label('Button Text')
                            ->required(fn ($get) => filled($get('button_url'))),
                        
                        TextInput::make('button_url')
                            ->label('Button URL')
                            ->url(),
                    ])
            ]);
    }

    public static function mutateData(array $data): array
    {
        if (filled($data['image'])) {
            $data['image'] = Storage::url($data['image']);
        }

        return $data;
    }
}