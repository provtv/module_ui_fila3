<?php

declare(strict_types=1);

namespace Modules\UI\Filament\Blocks;

<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> da8a6bc2 (.)
use Filament\Forms\Components\Builder\Block;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;

class Heading
{
<<<<<<< HEAD
=======
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Builder\Block;
use Modules\Xot\Filament\Blocks\XotBaseBlock;

class Heading extends XotBaseBlock
{
    /*
>>>>>>> 0238e98d (.)
=======
>>>>>>> da8a6bc2 (.)
    public static function make(
        string $name = 'heading',
        string $context = 'form',
    ): Block {
        return Block::make($name)
            ->schema(
                [
                    TextInput::make('content')

                        ->required(),
                    Select::make('level')
                        ->options([
                            'h1' => 'Heading 1',
                            'h2' => 'Heading 2',
                            'h3' => 'Heading 3',
                            'h4' => 'Heading 4',
                            'h5' => 'Heading 5',
                            'h6' => 'Heading 6',
                        ])
                        ->required(),
                ]
            )->columns(2);
    }
<<<<<<< HEAD
<<<<<<< HEAD
=======
    */
    public static function getBlockSchema(): array
    {
        return [
            TextInput::make('content')

                ->required(),
            Select::make('level')
                ->options([
                    'h1' => 'Heading 1',
                    'h2' => 'Heading 2',
                    'h3' => 'Heading 3',
                    'h4' => 'Heading 4',
                    'h5' => 'Heading 5',
                    'h6' => 'Heading 6',
                ])
                ->required(),
        ];
    }
>>>>>>> 0238e98d (.)
=======
>>>>>>> da8a6bc2 (.)
}
