<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\Models\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'first_name' => ['required', 'string', 'max:255'],
            'last_name' => ['required', 'string', 'max:255'],
            'phone' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Models\User
     */
    protected function create(array $data)
    {
        if ($data['role'] == 'client') {
            return User::create([
                'first_name' => $data['first_name'],
                'last_name' => $data['last_name'],
                'email' => $data['email'],
                'phone' => $data['phone'],
                'education' => $data['education'],
                'gender' => $data['gender'],
                'age_range' => $data['age_range'],
                'disability' => $data['disability'],
                'state_of_origin' => $data['state_of_origin'],
                'identification' => $data['identification'],
                'profile_photo_path' => $data['profile_photo_path'],
                'id_number' => $data['id_number'],
                'id_issue_date' => $data['id_issue_date'],
                'id_expiry' => $data['id_expiry'],
                'nationality' => $data['nationality'],
                'qualification' => $data['qualification'],
                'role' => $data['role'],
                'lga' => $data['lga'],
                'address' => $data['address'],
                'completed' => $data['completed'],
                'password' =>  Hash::make($data['password']),
            ]);
        } else {

            return User::create([
                'first_name' => $data['first_name'],
                'last_name' => $data['last_name'],
                'email' => $data['email'],
                'phone' => $data['phone'],
                'role' => $data['role'],
                'department' => $data['department'],
                'password' => Hash::make($data['password']),
            ]);
        }
    }
    protected $casts = [
        'date' => 'datetime',

    ];
}
