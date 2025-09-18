<?php

declare(strict_types=1);

namespace Modules\UI\Filament\Blocks;

use Filament\Forms\Components\Builder\Block;
use Filament\Forms\Components\TextInput;
use Modules\UI\Filament\Forms\Components\RadioImage;
use Modules\Xot\Actions\Filament\Block\GetViewBlocksOptionsByTypeAction;
use Modules\Xot\Actions\View\GetViewsSiblingsAndSelfAction;
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> da8a6bc2 (.)
=======
>>>>>>> d3afd1fe (.)

class Slider
{
    public static function make(
        string $name = 'slider',
        string $context = 'form',
    ): Block {
        // $view = 'ui::components.blocks.slider.v1';
        // $views = app(GetViewsSiblingsAndSelfAction::class)->execute($view);
        // dddx('a');
        $options = app(GetViewBlocksOptionsByTypeAction::class)
            ->execute('slider', true);

        // dddx($options);
        return Block::make($name)
            ->schema(
                [
<<<<<<< HEAD
<<<<<<< HEAD
=======
use Modules\Xot\Filament\Blocks\XotBaseBlock;

class Slider extends XotBaseBlock
{
    public static function getBlockSchema(): array
    {
        $options = app(GetViewBlocksOptionsByTypeAction::class)
            ->execute('slider', true);

        return [

>>>>>>> 0238e98d (.)
=======
>>>>>>> da8a6bc2 (.)
=======
>>>>>>> d3afd1fe (.)
                    TextInput::make('method')

                        ->hint('Inserisci il nome del metodo da richiamare nel tema')
                        ->required(),

                    // Select::make('_tpl')
                    //     ->label('layout')
                    //     ->options($options),
                    // ->afterStateHydrated(static fn ($state, $set) => $state || $set('level', 'h2')),

                    RadioImage::make('view')
                        ->options($options),
                ]
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
            )
            ->columns(1);
    }

    public static function getFormSchema(): array
    {
        /** @var array<string, \Filament\Forms\Components\Component> */
        return [
            \Filament\Forms\Components\Select::make('layout')
                ->options([
                    'default' => 'Default',
                    'fullscreen' => 'Fullscreen',
                    'minimal' => 'Minimal',
                ])
                ->required(),
        ];
=======
        ;
>>>>>>> 0238e98d (.)
    }
=======
            )
            ->columns(1);
    }
>>>>>>> da8a6bc2 (.)
=======
            )
            ->columns(1);
    }
>>>>>>> d3afd1fe (.)
}
