<<<<<<< HEAD
s(['blocks'])
=======
@props(['blocks'])
>>>>>>> 0238e98d (.)
{{-- Blocks  --}}
@foreach ($blocks as $block)
    <x-render.block :block="$block" :model="$model" />
@endforeach
