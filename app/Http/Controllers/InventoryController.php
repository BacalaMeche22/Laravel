<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\InventoryModel;


class InventoryController extends Controller
{
    //
     public static function index() {
        $inventory = InventoryModel::get();
        return view(view: 'pages.inventory.show-inventory')->with(key: ['inventory' => $inventory]);
    }


     public static function store(Request $request) {
        //Validate request
        $request->validate( [
        'inp_item_name' => 'required|String|max:255',
        'inp_quantity' => 'required|String|max:255',
        'inp_item_category' => 'required|String|max:200',

        ]);


        //Save Customer record
        InventoryModel::create([
            'item_name' => $request->inp_item_name,
            'item_quantity' => $request->inp_quantity,
            'item_category' => $request->inp_item_category,

        ]);

        //Redirect back with success
        return redirect()->back()->with(key: 'success', value: 'Item Added Successfully');
    }

}
