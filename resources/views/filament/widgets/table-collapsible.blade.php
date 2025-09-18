<<<<<<< HEAD
<<<<<<< HEAD
lament::widget>
=======
<x-filament::widget>
>>>>>>> 0238e98d (.)
=======
<x-filament::widget>
>>>>>>> da8a6bc2 (.)
    <x-filament::section collapsible collapsed wire:key="section-{{ $guid }}">
        <x-slot name="heading">
            {{ $title }}
        </x-slot>
        <div wire:ignore>
            {{ $this->table }}
        </div>
    </x-filament::section>
</x-filament::widget>
