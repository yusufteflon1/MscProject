<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\client;

class clients extends Component
{
    // public $clients;

    // protected $fillable = [];

    // public function mount()
    // {
    //     $this->clients = clients::all();
    // }

    public $clients;
    public $first_name;
    public $title;



    public function mount(client $title)

    {

        $this->title = $title;
    }

    public function render()
    {
        return view('livewire.clients');
    }
}
