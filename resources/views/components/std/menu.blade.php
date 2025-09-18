<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
s(['name'])
=======
@props(['name'])
>>>>>>> 0238e98d (.)
=======
@props(['name'])
>>>>>>> da8a6bc2 (.)
=======
@props(['name'])
>>>>>>> d3afd1fe (.)

@if ($menu = \App\Models\Menu::whereName($name)->first())
    <ul class="ml-auto flex items-center space-x-4">
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
@endif
