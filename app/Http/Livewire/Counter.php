<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Counter extends Component
{
    public $number = true;

    public function render()
    {
        return view('livewire.counter');
    }

    // public function increment()
    // {   
    //     if($this->number <= 5) {
    //         $this->number = $this->number + 1;
    //         return;
    //     }
        
    // }

    // public function decrement()
    // {   
    //     if($this->number >= 1) {
    //         $this->number = $this->number - 1;
    //         return;
    //     }   
        
    // }

}
