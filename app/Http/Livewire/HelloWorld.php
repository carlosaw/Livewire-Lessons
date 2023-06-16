<?php

namespace App\Http\Livewire;

use Livewire\Component;

class HelloWorld extends Component
{
    public $name = 'Carlos Alberto';
    public $salutation = "Hello";
    public $color = "#0000FF";
    public $salutationOptions = ['Hello', 'Bye Bye'];

    public function render()
    {
        return view('livewire.hello-world');
    }
}
