<?php

namespace App\Http\Livewire;

use App\Models\clent;
use Livewire\Component;

class Clients extends Component
{
    public $modelFormVisible = false;
    public $first_name;
    public $last_name;
    public $phone;

    /**
     * createShowModel showing the form model of the create function
     *
     * @return void
     */
    public function createShowModal()
    {
        $this->modelFormVisible = true;
    }

    /**
     * render function for livewire
     *
     * @return void
     */
    public function render()
    {
        return view('livewire.clients');
    }
}
