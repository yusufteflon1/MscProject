<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ClientsController extends Controller
{
    public $createShowModal;

    public function show($clients_id)
    {
        $clients_id = \App\Models\client::findOrFail($clients_id);
        return view('clients', compact('clients_id'));
    }
}
