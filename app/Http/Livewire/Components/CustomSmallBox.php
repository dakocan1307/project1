<?php

namespace App\Http\Livewire\Components;

use Livewire\Component;

class CustomSmallBox extends Component
{
    public $amount;
    public $card_title;
    public $bg_color;

    public function mount($amount, $card_title, $bg_color)
    {
        $this->amount = $amount;
        $this->card_title = $card_title;
        $this->bg_color = $bg_color;
    }

    public function render()
    {
        return view('livewire.components.custom-small-box');
    }
}
