<<<<<<< HEAD
s(['text', 'level'])
=======
@props(['text', 'level'])
>>>>>>> 0238e98d (.)
@if($level != null)
    <{{ $level }}>{{ $text }}</{{ $level }}>
@else
    {{ $text }}
@endif
