<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Laravel\Socialite\Facades\Socialite;
use App\Models\User;
use Auth;

class GoogleController extends Controller
{



    //Login Using Google
    public function loginUsingGoogle()
    {
        return Socialite::driver('google')->redirect();
    }
    public function googleCallback()
    {
        $user = Socialite::driver('google')->user();
        $this->createOrUpdateUser($user);
        return redirect()->route('verify');
    }

    private function createOrUpdateUser($data,)
    {
        $user = User::where('email', $data->email)->first();
        if ($user) {
            $user->update([
                'google_id' => $data->id,
                'avatar' => $data->avatar,
            ]);
        } else {
            $user = User::create([
                'name' => $data->name,
                'email' => $data->email,
                'google_id' => $data->id,
                'avatar' => $data->avatar,
            ]);
        }

        Auth::login($user);
    }
}
