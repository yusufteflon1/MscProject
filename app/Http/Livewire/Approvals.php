<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\client;

class Approvals extends Component
{
    public $client;
    public $modalFormVisible = false;
    public $modalConfirmDeleteVisible = false;
    public $modelId;



    public function mount()
    {
    }


    // public function createShowModal()
    // {

    //     $this->modalFormVisible = true;
    // }


    // public function create()
    // {
    //     $this->validate();
    //     $this->unassignDefaultHomeclient();
    //     $this->unassignDefaultNotFoundclient();
    //     clients::create($this->modelData());
    //     $this->modalFormVisible = false;
    //     $this->reset();

    //     $this->dispatchBrowserEvent('event-notification', [
    //         'eventName' => 'New client',
    //         'eventMessage' => 'Another client has been created!',
    //     ]);
    // }

    // public function verifyClient(){
    //     $this->verifyClient = client::where(
    //         if () {
    //             # code...
    //         } else {
    //             # code...
    //         }

    //     );
    // }

    public function render()
    {

        $this->clients = client::all();
        return view('livewire.approvals');
    }
}
