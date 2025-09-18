<<<<<<< HEAD
<<<<<<< HEAD
s(['blocks'])
=======
@props(['blocks'])
>>>>>>> 0238e98d (.)
=======
@props(['blocks'])
>>>>>>> da8a6bc2 (.)
{{-- Blocks  --}}
@foreach ($blocks as $block)
    <x-render.block :block="$block" :model="$model" />
@endforeach
