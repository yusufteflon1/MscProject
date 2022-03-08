<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\client;

class clients extends Component
{
    public $clients;

    protected $fillable = [];

    public function mount()
    {
        $this->clients = clients::all();
    }
    public function render()
    {
        return view('livewire.clients');
    }
}
