<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PublicController extends Controller
{
    public function staffRegister()
    {
        return view('staff.register_staff');
    }
    public function clientRegister()
    {
        return view('client.register_client');
    }
    public function managerRegister()
    {
        return view('manager.register_manager');
    }
    public function Register()
    {
        return view('auth.register');
    }
    public function next()
    {
        return view('auth.next');
    }
}
