<?php

namespace App\Http\Livewire;

use Illuminate\Http\Request;
use Livewire\Component;

class User extends Component
{
    public $name = "Carlos";
    public $hookName = 'N/A';
    public $propertyName = 'N/A';
    public $propertyValue = 'N/A';

    public function render()
    {
        return view('livewire.user');
    }

    public function updated($property, $value) {
        $this->$property = strtoupper($value);
        $this->name = ucfirst($this->name);
        $this->hookName = 'Updated rodou!';
        $this->propertyName = $property;
        $this->propertyValue = $value;
    }
}
