<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
s(['post'])
=======
@props(['post'])
>>>>>>> 0238e98d (.)
=======
@props(['post'])
>>>>>>> da8a6bc2 (.)
=======
@props(['post'])
>>>>>>> d3afd1fe (.)

@if ($post->published_at)
    Published on {{ $post->published_at->format('M jS, Y') }} —
    in <a href="{{ route('post.index', ['category' => $post->category->slug]) }}">{{ $post->category->name }}</a>
@else
    [Not published]
@endif
