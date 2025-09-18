<<<<<<< HEAD
s(['blocks'])
=======
@props(['blocks'])
>>>>>>> 0238e98d (.)

@foreach ($blocks as $block)
    <x-render.block :block="$block" :model="$model" tpl="v2"/>
@endforeach
