<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
lass="ml-auto flex items-center space-x-4">
=======
<ul class="ml-auto flex items-center space-x-4">
>>>>>>> 0238e98d (.)
=======
<ul class="ml-auto flex items-center space-x-4">
>>>>>>> da8a6bc2 (.)
=======
<ul class="ml-auto flex items-center space-x-4">
>>>>>>> d3afd1fe (.)
        @foreach ($menu->items as $item)
            <li>
                <a
                    href="{{ $item['url'] }}"
                    @if ($item['type'] === 'external') target="_blank" @endif
                >
                    {{ $item['title'] }}
                </a>
            </li>
        @endforeach
    </ul>
