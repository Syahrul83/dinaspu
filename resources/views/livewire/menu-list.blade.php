<div>
    <div>
        <script src="https://unpkg.com/@nextapps-be/livewire-sortablejs@0.4.0/dist/livewire-sortable.js"></script>

        <ul wire:sortable="updateMenuOrder">
            @foreach ($menuItems as $menuItem)
                <li wire:sortable.item="{{ $menuItem->id }}" wire:key="menu-item-{{ $menuItem->id }}">
                    <h4 wire:sortable.handle>{{ $menuItem->title }}</h4>
                    <button wire:click="removeMenuItem({{ $menuItem->id }})">Remove</button>
                    @if ($menuItem->children->count())
                        <ul wire:sortable-group>
                            @foreach ($menuItem->children as $child)
                                <li wire:sortable.item="{{ $child->id }}" wire:key="menu-item-{{ $child->id }}">
                                    <h5 wire:sortable.handle>{{ $child->title }}</h5>
                                    <button wire:click="removeMenuItem({{ $child->id }})">Remove</button>
                                </li>
                            @endforeach
                        </ul>
                    @endif
                </li>
            @endforeach
        </ul>
    </div>
</div>
