<?php

declare(strict_types=1);



namespace Modules\UI\View\Components\Blocks\Hero;

use Illuminate\View\Component;

class Simple extends Component
{
    public function __construct(): void {
        //
    }

    public function render(): void {
        return view('ui::components.blocks.hero.simple');
    }
} 