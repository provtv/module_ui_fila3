<?php

declare(strict_types=1);

namespace Modules\UI\Providers\Filament;

use Filament\Panel;
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
use Filament\Support\Assets\Js;
use Filament\Support\Assets\Css;
use Filament\Support\Facades\FilamentAsset;
use Filament\SpatieLaravelTranslatablePlugin;
use Modules\Xot\Providers\Filament\XotBasePanelProvider;
//use LaraZeus\Bolt\BoltPlugin;
=======
=======
>>>>>>> da8a6bc2 (.)
=======
>>>>>>> d3afd1fe (.)
use Filament\Support\Assets\Css;
use Filament\Support\Assets\Js;
use Filament\Support\Facades\FilamentAsset;
use Modules\Xot\Providers\Filament\XotBasePanelProvider;
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 0238e98d (.)
=======
>>>>>>> da8a6bc2 (.)
=======
>>>>>>> d3afd1fe (.)

class AdminPanelProvider extends XotBasePanelProvider
{
    protected string $module = 'UI';

    public function panel(Panel $panel): Panel
    {
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        $panel=parent::panel($panel);
=======
>>>>>>> 0238e98d (.)
=======
>>>>>>> da8a6bc2 (.)
=======
>>>>>>> d3afd1fe (.)
        // FilamentAsset::register(
        //     [
        //         Css::make('filament-navigation-styles', __DIR__.'/../../resources/dist/plugin.css'),
        //         Js::make('filament-navigation-scripts', __DIR__.'/../../resources/dist/plugin.js'),
        //     ],
        //     'filament-navigation'
        // );
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        /*
        $spatieLaravelTranslatablePlugin = SpatieLaravelTranslatablePlugin::make()
            ->defaultLocales(['it', 'en']);

        $boltPlugin = BoltPlugin::make();

        $plugins = [
            $spatieLaravelTranslatablePlugin,
            $boltPlugin
        ];
        
        $panel->plugins($plugins);
        */
        return $panel;
=======

        return parent::panel($panel);
>>>>>>> 0238e98d (.)
=======

        return parent::panel($panel);
>>>>>>> da8a6bc2 (.)
=======

        return parent::panel($panel);
>>>>>>> d3afd1fe (.)
    }
}
