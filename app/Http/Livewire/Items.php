<?php

namespace App\Http\Livewire;

use App\Models\Item;
use Livewire\Component;

class Items extends Component
{
    public function render()
    {
        $items = Item::all();
        return view('livewire.items',[
            'items' => $items
        ]);
    }
}
