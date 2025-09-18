<?php

declare(strict_types=1);

namespace Modules\UI\Datas;

use Spatie\LaravelData\Data;

class SliderData extends Data
{
<<<<<<< HEAD
<<<<<<< HEAD
    public function __construct(): void {
=======
=======
>>>>>>> da8a6bc2 (.)
    public function __construct(
        public ?string $desktop_thumbnail,
        public ?string $mobile_thumbnail,
        public ?string $desktop_thumbnail_webp,
        public ?string $mobile_thumbnail_webp,
        public ?string $link,
        public ?string $title,
        public ?string $short_description,
        public ?string $description,
        public ?string $action_text,
    ) {
<<<<<<< HEAD
>>>>>>> 0238e98d (.)
=======
>>>>>>> da8a6bc2 (.)
        $this->short_description = $this->description;
    }
}
