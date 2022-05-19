<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;
use Illuminate\Http\Request;
use App\Models\User;

class GoogleController extends Controller
{


    //Login Using Google
    public function loginUsingGoogle()

    {
        return Socialite::driver('google')->redirect();
    }
    public function googleCallback()
    {
        $user = Socialite::driver('google')->stateless()->user();
        $this->createOrUpdateUser($user);
        if (Auth::user()->role == 'manager' && Auth::user()->social_name != '') return redirect('manager-dashboard');
        if (Auth::user()->role == 'manager' && Auth::user()->completed == '') return redirect('manager-register');
        if (Auth::user()->role == 'staff' && Auth::user()->social_name != '') return redirect('staff-dashboard');
        // if (Auth::user()->role == 'staff' && Auth::user()->completed == '') return redirect('staff-register');
        if (Auth::user()->role == 'client') return redirect('client-profile');

        return redirect()->route('client-register');
    }

    private function createOrUpdateUser($data)
    {
        $user = User::where('email', $data->email)->first();
        $user = User::updateOrCreate(['email' => $data->email], [
            'social_name' => $data->name,
            'email' => $data->email,
            'google_id' => $data->id,
            'avatar' => $data->avatar,
            'password' => '',
            // 'completed' => '1',

        ]);


        Auth::login($user);
    }

    public function show()
    {
        return view('next');
    }
}


















        // if (Auth::user()->role == '') return redirect('next');
        //if (Auth::user()->completed == '1') return redirect('client-profile');



    // $first_name = $sec_name = '';
        // for ($i = 0; $i < count($name_split); $i++) {
        //     $first_name = $name_split[$i];
        //     if ($i == 1 && $name_split[$i] != '') {
        //         $sec_name = $name_split[$i];
        //     }
        //     if ($user) {
        //         $user->update([
        //             'google_id' => $data->id,
        //             'avatar' => $data->avatar,
        //         ]);
        //     } else {
        //         $user = User::create([

        //             'first_name' => $first_name,
        //             'last_name' => $sec_name,
        //             'email' => $data->email,
        //             'google_id' => $data->id,
        //             'avatar' => $data->avatar,
        //             'password' => '',
        //         ]);
