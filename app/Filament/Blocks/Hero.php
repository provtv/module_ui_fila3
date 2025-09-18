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
use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Modules\UI\Filament\Forms\Components\RadioImage;
use Modules\Xot\Actions\Filament\Block\GetViewBlocksOptionsByTypeAction;

class Hero
{
<<<<<<< HEAD
<<<<<<< HEAD
=======
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\Builder\Block;
use Modules\Xot\Filament\Blocks\XotBaseBlock;
use Modules\UI\Filament\Forms\Components\RadioImage;
use Modules\Xot\Actions\Filament\Block\GetViewBlocksOptionsByTypeAction;

class Hero extends XotBaseBlock
{
    /*
>>>>>>> 0238e98d (.)
=======
>>>>>>> da8a6bc2 (.)
=======
>>>>>>> d3afd1fe (.)
    public static function make(
        string $name = 'hero',
        string $context = 'form',
    ): Block {
        $options = app(GetViewBlocksOptionsByTypeAction::class)
            ->execute('hero', true);

        // ---------------
        return Block::make($name)
            ->schema(
                [
                    TextInput::make('title'),
                    RichEditor::make('text'),
                    FileUpload::make('background')
                        // ->acceptedFileTypes(['application/pdf'])
                        // ->image()
                        ->directory('blocks')
                        ->preserveFilenames(),
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> da8a6bc2 (.)
=======
>>>>>>> d3afd1fe (.)
                    /*
                    RadioImage::make('view')
                        ->options($options),
                    // */
                    /*
                    Select::make('_tpl')
                        ->options($views),
                    //*/
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 0238e98d (.)
=======
>>>>>>> da8a6bc2 (.)
=======
>>>>>>> d3afd1fe (.)
                    Repeater::make('buttons')
                        ->schema([
                            TextInput::make('label')->required(),
                            TextInput::make('class'),
                            TextInput::make('link'),
                        ])
                        ->columns(3),
                ]
            );
    }
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
    */


    public static function getBlockSchema(): array
    {
        return [
            TextInput::make('title'),
            RichEditor::make('text'),
            FileUpload::make('background')
                ->directory('blocks')
                ->preserveFilenames(),
            Repeater::make('buttons')
                ->schema([
                    TextInput::make('label')->required(),
                    TextInput::make('class'),
                    TextInput::make('link'),
                ])
                ->columns(3),
        ];
    }
>>>>>>> 0238e98d (.)
=======
>>>>>>> da8a6bc2 (.)
=======
>>>>>>> d3afd1fe (.)
}
