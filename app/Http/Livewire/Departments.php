<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Departments extends Component
{
    public Departments $departments;
    public function render()
    {
        return view('livewire.departments');
    }
}
