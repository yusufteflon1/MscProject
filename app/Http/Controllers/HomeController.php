<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */

    public function index()
    {
        try {
            if (Auth::user()->completed !== '1') return redirect('/auth/google/redirect');
        } catch (\Throwable $th) {
            if (Auth::user()->role == 'client') return redirect('client-profile');
            if (Auth::user()->role == 'admin') return redirect('admin-dashboard');
            // if (Auth::user()->role == 'staff') return redirect('/auth/google/redirect');
            if (Auth::user()->role == 'manager') return redirect('manager-dashboard');
        }
        return view('auth.login');
    }

    public function dashboard()
    {

        try {
            if (Auth::user()->completed !== '1') return redirect('/auth/google/redirect');
        } catch (\Throwable $th) {
            if (Auth::user()->role == 'client') return redirect('client-profile');
            if (Auth::user()->role == 'admin') return redirect('admin-dashboard');
            // if (Auth::user()->role == 'staff') return redirect('/auth/google/redirect');
            if (Auth::user()->role == 'manager') return redirect('manager-dashboard');
        }
        return redirect('/');
    }



    public function logout()
    {
        Auth::logout();
        return redirect('/');
    }
}
