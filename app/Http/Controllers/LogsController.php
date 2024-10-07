<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\LogsModel;


class LogsController extends Controller
{
    //
    public static function index() {
       $logs = LogsModel::get();
       return view(view: 'pages.logs.index')->with(key: ['logs' => $logs]);
    }


     public static function store(Request $request) {
        //Validate request
        $request->validate( [
            'inp_employee_id' => 'required|integer',
            'inp_log_date' => 'required|date',
            'inp_log_type' => 'required|string',
            'inp_description' => 'nullable|string',
        ]);


        //Save Customer record
        LogsModel::create([
            'employee_id' => $request->inp_employee_id,
            'log_date' => $request->inp_log_date,
            'log_type' => $request->inp_log_type,
            'description' => $request->inp_description,
        ]);

        //Redirect back with success
        return redirect()->back()->with(key: 'success', value: 'Log Added Successfully');
    }



}
