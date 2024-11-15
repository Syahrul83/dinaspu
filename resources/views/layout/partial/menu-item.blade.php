<li class="dropdown {{ $item->children->isNotEmpty() ? 'dropdown-submenu' : '' }}">
    @if (strtolower($item->title) === 'home')
        <a href="{{ route('home') }}" class="dropdown-item">
            <i class="fas fa-home"></i>
        </a>
    @else
        <a href="{{ $item->url }}" class="dropdown-item">
            {{ $item->title }}
            @if ($item->children->isNotEmpty())

            @endif
        </a>
    @endif

    @if ($item->children->isNotEmpty())
        <ul class="dropdown-menu">
            @foreach ($item->children as $child)
                @include('layout.partial.menu-item', ['item' => $child])
            @endforeach
        </ul>
    @endif
</li>