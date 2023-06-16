<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Counter extends Component
{
    public $number = 0;

    public function render()
    {
        return view('livewire.counter');
    }

    public function increment()
    {
        if($this->number == 2) {
            $this->number = "'Você atingiu o máximo'";
            return;
        }
        $this->number = $this->number + 1;
    }
}
