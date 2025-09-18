<<<<<<< HEAD
<<<<<<< HEAD
s(['text', 'level'])
=======
@props(['text', 'level'])
>>>>>>> 0238e98d (.)
=======
@props(['text', 'level'])
>>>>>>> da8a6bc2 (.)
@if($level != null)
    <{{ $level }}>{{ $text }}</{{ $level }}>
@else
    {{ $text }}
@endif
