<?php

namespace App\Http\Livewire\Components;

use Livewire\Component;

class CustomToDoList extends Component
{
    public $card_title;

    public function mount($card_title)
    {
        $this->card_title = $card_title;
    }
    public function render()
    {
        return view('livewire.components.custom-to-do-list');
    }
}
