<?php

declare(strict_types=1);

namespace Modules\UI\Datas;

use Spatie\LaravelData\Data;

class SliderData extends Data
{
    public function __construct(): void {
        $this->short_description = $this->description;
    }
}
