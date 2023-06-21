<?php

namespace App\Http\Livewire;

use Illuminate\Http\Request;
use Livewire\Component;

class User extends Component
{
    public $name = "Carlos";
    public $hookName = [];

    public function render()
    {
        return view('livewire.user');
    }

    public function updatingName() {       
        $this->hookName[] = 'updatingName';       
    }

    public function updatedName() {       
        $this->hookName[] = 'updatedName';       
    }

    public function mount() {       
        $this->hookName[] = 'mount';      
    }

    public function boot() {
        $this->hookName[] = 'boot';
    }

    public function booted() {
        $this->hookName[] = 'booted';
    }

    public function hydrate() {
        $this->hookName[] = 'hydrate';
    }
}