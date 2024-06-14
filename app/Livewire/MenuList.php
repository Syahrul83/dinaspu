<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\MenuItem;

class MenuList extends Component
{

    public $menuItems;

    public function mount()
    {
        $this->menuItems = MenuItem::whereNull('parent_id')->with('children')->orderBy('order_column')->get();
    }

    public function updateMenuOrder($orderedIds)
    {
        foreach ($orderedIds as $index => $id) {
            MenuItem::where('id', $id)->update(['order_column' => $index]);
        }
        $this->menuItems = MenuItem::whereNull('parent_id')->with('children')->orderBy('order_column')->get();
    }

    public function removeMenuItem($id)
    {
        MenuItem::find($id)->delete();
        $this->menuItems = MenuItem::whereNull('parent_id')->with('children')->orderBy('order_column')->get();
    }

    public function render()
    {
        return view('livewire.menu-list');
    }
}
