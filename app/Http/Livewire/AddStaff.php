<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\User;

class AddStaff extends Component
{
    public $email;
    public $role;
    public $first_name;
    public $last_name;
    public $phone;
    public $department;

    // public $password;
    public function submit()
    {
        $data = $this->validate([
            'email' => 'required|email',
            'role' => 'required|max:10',
            'first_name' => 'required|max:25',
            'last_name' => 'required|max:25',
            'phone' => 'required|max:25',
            'department' => 'required|max:25',
        ]);

        User::create($data);

        return redirect()->to('manager-users-table');
    }

    public function render()
    {
        return view('livewire.add-staff');
    }
}
