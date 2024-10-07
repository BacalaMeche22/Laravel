<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Orders;

class OrdersController extends Controller
{
    public static function index() {
        $orders = Orders::get();
        return view(view: 'pages.orders.index')->with(key: ['orders' => $orders]);
    }


    public static function store(Request $request) {
        //Validate request
        $request->validate( [
            'inp_client_id' => 'required|exists:t_clients,client_id',
            'inp_order_date' => 'required|date',
            'inp_total_amount' => 'required|numeric',
            'inp_status' => 'required|in:pending,completed,cancelled',
        ]);


        //Save Customer record
        Orders::create([
            'client_id' => $request->inp_client_id,
            'order_date' => $request->inp_order_date,
            'total_amount' => $request->inp_total_amount,
            'status' => $request ->inp_status,


        ]);

        //Redirect back with success
        return redirect()->back()->with(key: 'success', value: 'Order Added Successfully');
    }

}

