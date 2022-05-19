<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\client;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class Verify extends Component
{
    public $client;
    public $clients;
    public $first_name;
    public $last_name;
    public $modalFormVisible = true;
    public $modalConfirmDeleteVisible = false;
    public $modelId;
    public $email;
    public $password;
    public $telephone;
    public $education;
    public $gender;
    public $age_range;
    public $disability;
    public $state_of_origin;
    public $client_id;
    public $address;
    public $house_condition;
    public $lga;
    public $identification;
    public $id_number;
    public $id_issue_date;
    public $id_expiry;
    public $qualification;
    public $google_id;




    public function submit()
    {
        $data = $this->validate([
            'first_name' => 'required|min:2',
            'last_name' => 'required|min:2',
            'telephone' => 'required',
            'education' => 'required',
            'gender' => 'required',
            'age_range' => 'required',
            'disability' => 'required',
            'state_of_origin' => 'required',
            'address' => 'required',
            'house_condition' => 'required',
            'lga' => 'required',
            'identification' => 'required',
            'id_number' => 'required',
            'id_issue_date' => 'required',
            'id_expiry' => 'required',
            'qualification' => 'required',
            'google_id' => '',
            'email' => '',

        ]);


        client::create($data);

        return redirect()->to('/user/profile');
    }

    protected $casts = [
        'google_id' => 'Auth::U',
    ];

    public function createShowModal()
    {

        $this->modalFormVisible = true;
    }


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


    // private function createOrUpdateUser($data,)
    // {
    //     $user = User::where('email', $data->email)->first();
    //     if ($user) {
    //         $user->update([
    //             'google_id' => $data->id,
    //             'avatar' => $data->avatar,
    //         ]);
    //     } else {
    //         $user = User::create([
    //             'name' => $data->name,
    //             'email' => $data->email,
    //             'google_id' => $data->id,
    //             'avatar' => $data->avatar,
    //         ]);
    //     }

    public function mount()
    {
        $this->user = auth()->user();
    }

    public function render()
    {
        $this->users = User::all();
        return view('livewire.verify');
    }
}
