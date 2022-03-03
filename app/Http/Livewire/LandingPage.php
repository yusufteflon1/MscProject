<?php

namespace App\Http\Livewire;

use App\Models\Staff;
use Livewire\Component;

class LandingPage extends Component
{
    public $email,
        $name, $password;

    protected $rules = [
        'email' => 'required|email:filter|unique:Staff,email',

    ];

    public function subscribe()
    {
        $this->validate();

        $subscriber = Staff::create([
            'email' => $this->email,
            'name' => $this->name,
            'password' => $this->password,

        ]);

        $this->reset('email', 'name', 'password');
    }
    public function render()
    {
        return view('livewire.landing-page');
    }
}