<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Client;

class ClientController extends Controller
{
    public static function index() {
        $client = Client::get();
        return view(view: 'pages.client.index')->with(key: ['client' => $client]);
    }


    public static function store(Request $request) {
        //Validate request
        $request->validate( [
            'inp_client_name' => 'required|string|max:60',
            'inp_contact_email' => 'required|email|max:60|unique:t_clients,contact_email',
            'inp_phone_number' => 'required|string|max:11',
            'inp_address' => 'required|string',
        ]);


        //Save Customer record
        Client::create([
            'client_name' => $request->inp_client_name,
            'contact_email' => $request->inp_contact_email,
            'phone_number' => $request->inp_phone_number,
            'address' => $request ->inp_address,


        ]);

        //Redirect back with success
        return redirect()->back()->with(key: 'success', value: 'Client Added Successfully');
    }
}

