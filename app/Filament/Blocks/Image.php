<?php

declare(strict_types=1);

namespace Modules\UI\Filament\Blocks;

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> da8a6bc2 (.)
=======
>>>>>>> d3afd1fe (.)
use Filament\Forms\Components\Builder\Block;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;

class Image
{
    public static function make(
        string $name = 'image',
        string $context = 'form',
    ): Block {
        return Block::make($name)
            ->schema(
                [
<<<<<<< HEAD
<<<<<<< HEAD
=======
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Builder\Block;
use Modules\Xot\Filament\Blocks\XotBaseBlock;

class Image extends XotBaseBlock
{


    public static function getBlockSchema(): array
    {
        return  [
>>>>>>> 0238e98d (.)
=======
>>>>>>> da8a6bc2 (.)
=======
>>>>>>> d3afd1fe (.)
                    FileUpload::make('image'),

                    TextInput::make('url'),

                    Select::make('ratio')
                        ->options(static::getRatios())
                        ->afterStateHydrated(static fn ($state, $set) => $state || $set('ratio', '4-3')),

                    TextInput::make('alt')
                        ->columnSpanFull(),

                    TextInput::make('caption')
                        ->columnSpanFull(),
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
                ]
            )
            ->columns('form' === $context ? 2 : 1);
=======
        ];

>>>>>>> 0238e98d (.)
=======
                ]
            )
            ->columns('form' === $context ? 2 : 1);
>>>>>>> da8a6bc2 (.)
=======
                ]
            )
            ->columns('form' === $context ? 2 : 1);
>>>>>>> d3afd1fe (.)
    }

    public static function getRatios(): array
    {
        return [
            '4-3' => '4/3',
            '3-4' => '3/4',
            'free' => 'free',
        ];
    }

    public static function getRatioClass(string $ratio): string
    {
        return match ($ratio) {
            '4-3' => 'aspect-[4/3]',
            '3-4' => 'aspect-[3/4]',
            default => '',
        };
    }
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD

    public static function getFormSchema(): array
    {
        /** @var array<string, \Filament\Forms\Components\Component> */
        return [
            \Filament\Forms\Components\FileUpload::make('image')
                ->required()
                ->image()
                ->maxSize(5120),
            \Filament\Forms\Components\TextInput::make('url')
                ->url()
                ->maxLength(255),
        ];
    }
=======
>>>>>>> 0238e98d (.)
=======
>>>>>>> da8a6bc2 (.)
=======
>>>>>>> d3afd1fe (.)
}
