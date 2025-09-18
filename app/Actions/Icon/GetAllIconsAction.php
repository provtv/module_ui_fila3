<?php

declare(strict_types=1);

namespace Modules\UI\Actions\Icon;

use BladeUI\Icons\Factory as IconFactory;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\File;
use Spatie\QueueableAction\QueueableAction;

class GetAllIconsAction
{
    use QueueableAction;

    /**
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
     * @return array
     */
    public function execute(): void {
        $iconsFactory = App::make(IconFactory::class);
        
        // Uso reflection per accedere alle icone in modo sicuro
        try {
            $reflection = new \ReflectionClass($iconsFactory);
            $property = $reflection->getProperty('iconSets');
            $property->setAccessible(true);
            $icons = $property->getValue($iconsFactory);
        } catch (\Exception $e) {
            // Fallback: restituisci array vuoto se non riesci ad accedere
            return [];
        }

        // Verifica che $icons sia un array prima di usare Arr::map()
        if (!is_array($icons)) {
            return [];
        }
=======
     * Restituisce la struttura completa delle icone disponibili per la UI.
     *
     * @param string $context
     * @return array<string, array<string, mixed>>
     */
    public function execute(string $context = 'form'): array
    {
        $iconsFactory = App::make(IconFactory::class);
        $icons = $iconsFactory->all();
>>>>>>> 0238e98d (.)

=======
=======
>>>>>>> d3afd1fe (.)
     * @return array
     */
    public function execute(string $context = 'form')
    {
        $iconsFactory = App::make(IconFactory::class);
        $icons = $iconsFactory->all();
        /*
         *  "heroicons" => array:5 [▼
         *   "prefix" => "heroicon"
         *   "fallback" => ""
         *   "class" => ""
         *   "attributes" => []
         *   "paths" => array:1 [▼
         *      0 => "F:\var\www\_bases\base_broker_fila3\laravel\vendor\blade-ui-kit\blade-heroicons\src/../resources/svg"
         *   ]
        ]
         */
<<<<<<< HEAD
>>>>>>> da8a6bc2 (.)
=======
>>>>>>> d3afd1fe (.)
        $icons = Arr::map($icons, function (array $set, array|string $name) {
            $set['name'] = $name;
            $icons = [];

            foreach ($set['paths'] as $path) {
                foreach (File::allFiles($path) as $file) {
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
                    // Simply ignore files that aren't SVGs
=======
                    // Ignora file che non sono SVG
>>>>>>> 0238e98d (.)
=======
                    // Simply ignore files that aren't SVGs
>>>>>>> da8a6bc2 (.)
=======
                    // Simply ignore files that aren't SVGs
>>>>>>> d3afd1fe (.)
                    if ('svg' !== $file->getExtension()) {
                        continue;
                    }

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
                    // $iconName = $this->getIconName($file, parentPath: $path, prefix: $prefix);
=======
>>>>>>> 0238e98d (.)
=======
                    // $iconName = $this->getIconName($file, parentPath: $path, prefix: $prefix);
>>>>>>> da8a6bc2 (.)
=======
                    // $iconName = $this->getIconName($file, parentPath: $path, prefix: $prefix);
>>>>>>> d3afd1fe (.)
                    $iconName = str($file->getPathname())
                        ->after($path.DIRECTORY_SEPARATOR)
                        ->replace(DIRECTORY_SEPARATOR, '.')
                        ->basename('.svg')
                        ->toString();

                    $icons[] = $set['prefix'].'-'.$iconName;
                }
            }
            $set['icons'] = $icons;

            return $set;
        });

        return $icons;
    }
}
