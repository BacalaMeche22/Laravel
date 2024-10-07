<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CustomerModel;

class CustomerController extends Controller
{
    public static function index() {
        $customers = CustomerModel::get();
        return view(view: 'pages.customer.index')->with(key: ['customers' => $customers]);
    }


    public static function store(Request $request) {
        //Validate request
        $request->validate( [
        'inp_fn' => 'required|String|max:255',
        'inp_ln' => 'required|String|max:255',
        'inp_email' => 'required|String|unique:t_customer,cus_email',
        'inp_phone' => 'nullable|String|max:20',
        'inp_address' => 'nullable|String|max:255',
        'inp_city' => 'nullable|String|max:255',
        'inp_state' => 'nullable|String|max:255',
        'inp_postal' => 'nullable|String|max:20',
        'inp_country' => 'nullable|String|max:255'
        ]);


        //Save Customer record
        CustomerModel::create([
            'cus_first_name' => $request->inp_fn,
            'cus_last_name' => $request->inp_ln,
            'cus_email' => $request->inp_email,
            'cus_phone_number' => $request ->inp_phone,
            'cus_address' => $request->inp_address,
            'cus_city' => $request ->inp_city,
            'cus_state' => $request->inp_state,
            'cus_postal_code' => $request ->inp_postal,
            'cus_last_country' => $request ->inp_country,



        ]);

        //Redirect back with success
        return redirect()->back()->with(key: 'success', value: 'Customer Added Successfully');
    }
}

