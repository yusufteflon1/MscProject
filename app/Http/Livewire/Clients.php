<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\client;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Livewire\WithPagination;

class clients extends Component
{
    use WithPagination;
    public $client;
    public $client_id;
    public $clients;
    public $modalFormVisible = false;
    public $modalConfirmDeleteVisible = false;
    public $modelId;
    public $create;
    public $name;
    public $email;
    public $total_clients;
    public $viewClient;
    public $modalClientVisible = false;
    public $clientdata;



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
    public function viewClient()
    {
        $this->modalClientVisible = true;


        // $client_id = client::find($client_id);
        // if ($client_id) {
        //     $client_id = DB::table('clients')->where('id', '=', $client_id)->pluck('client_id');
        // }
        // return $client_id;



    }


    public function verified()
    {
        $this->client = client::all();
        dd($clientdata);
    }

    public function render()
    {

        $this->clients = client::all();
        return view('livewire.clients');
    }
}
