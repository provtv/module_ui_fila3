<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
s(['active'])
=======
@props(['active'])
>>>>>>> 0238e98d (.)
=======
@props(['active'])
>>>>>>> da8a6bc2 (.)
=======
@props(['active'])
>>>>>>> d3afd1fe (.)

@php
$classes = ($active ?? false)
            ? 'mr-2 text-sm font-medium text-gray-700'
            : 'mr-2 text-sm font-medium text-gray-500 hover:text-gray-600';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>
