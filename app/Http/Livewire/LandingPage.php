<?php

namespace App\Http\Livewire;

use App\Models\User;
use Livewire\Component;
use App\Models\client;

class LandingPage extends Component
{
    // public $email,
    //     $name, $password;
    public $total_clients;
    public $openDate = false;
    public $select_date;
    public $date;

    // protected $rules = [
    //     'email' => 'required|email:filter|unique:Staff,email',

    // ];


    public function ShowDate()
    {

        $this->openDate = true;




        // $data = $this->([
        //     'date' => 'required',
        // ]);

        // if ($date < date("Y-m-d")) {
        //     echo "Date is in the past";
        // }
        // client::create($data);
    }
    public function mount()
    {
        $this->user = auth()->user();
        $this->total_clients = client::count();
    }
    // public function subscribe()
    // {
    //     $this->validate();

    //     $subscriber = User::create([
    //         'email' => $this->email,
    //         'name' => $this->name,
    //         'password' => $this->password,

    //     ]);

    //     $this->reset('email', 'name', 'password');
    // }
    public function render()
    {

        return view('livewire.landing-page');
    }
}
