<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Mail;

class Departments extends Component
{
    public Departments $departments;
    public function render()
    {
        return view('livewire.departments');
    }

    public function basic_email()
    {
        $data = array('name' => "Virat Gandhi");

        Mail::send(['text' => 'mail'], $data, function ($message) {
            $message->to('yusuf@aea.org.ng', 'Tutorials Point')->subject('Laravel Basic Testing Mail');
            $message->from('yusuf@aea.org.ng', 'Virat Gandhi');
        });
        echo "Basic Email Sent. Check your inbox.";
        return view('livewire.departments');
    }
}

// $request->session()->flash('error', 'Sorry An Error Occurred.');