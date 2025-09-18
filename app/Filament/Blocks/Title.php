<?php

declare(strict_types=1);

namespace Modules\UI\Filament\Blocks;

use Filament\Forms\Components\Builder\Block;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Modules\Xot\Actions\Filament\Block\GetViewBlocksOptionsByTypeAction;
use Modules\Xot\Actions\View\GetViewsSiblingsAndSelfAction;
use Modules\Xot\Filament\Blocks\XotBaseBlock;

<<<<<<< HEAD
class Title // extends XotBaseBlock
{public static function make(
    string $name = 'title',
    string $context = 'form',
): Block {
=======
class Title extends XotBaseBlock
{
    public static function getBlockSchema(): array
    {
>>>>>>> 0238e98d (.)
    // $view = 'ui::components.blocks.title.v1';
    // $views = app(GetViewsSiblingsAndSelfAction::class)->execute($view);

    $options = app(GetViewBlocksOptionsByTypeAction::class)
        ->execute('title', false);

<<<<<<< HEAD
    return Block::make($name)
        ->schema(
            [
=======
    return [
>>>>>>> 0238e98d (.)
                TextInput::make('text')
                    ->required(),

                Select::make('level')
                    ->options(
                        [
                            'h2' => 'h2',
                            'h3' => 'h3',
                            'h4' => 'h4',
                        ]
                    )
                    ->afterStateHydrated(static fn ($state, $set) => $state || $set('level', 'h2')),

                Select::make('view')
                    ->options($options),
            ]
<<<<<<< HEAD
        )
        ->columns('form' === $context ? 2 : 1);
=======
        ;
>>>>>>> 0238e98d (.)
}
}
