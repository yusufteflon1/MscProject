<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\client;
use App\Models\User;

class clients extends Component
{

    public $clients;
    public $first_name;
    public $modalFormVisible = false;
    public $modalConfirmDeleteVisible = false;
    public $modelId;
    public $create;
    public $name;
    public $email;



    public function mount()
    {
        $this->user = auth()->user();
    }


    public function createShowModal()
    {

        $this->modalFormVisible = true;
    }


    public function create()
    {
        $this->validate();
        $this->unassignDefaultHomeclient();
        $this->unassignDefaultNotFoundclient();
        clients::create($this->modelData());
        $this->modalFormVisible = false;
        $this->reset();

        $this->dispatchBrowserEvent('event-notification', [
            'eventName' => 'New client',
            'eventMessage' => 'Another client has been created!',
        ]);
    }

    public function render()
    {
        return view('livewire.clients');
    }
}
