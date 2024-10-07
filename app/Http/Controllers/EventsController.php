<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Events;

class EventsController extends Controller
{
    public static function index() {
        $events = Events::get();
        return view(view: 'pages.events.index')->with(key: ['events' => $events]);
    }


    public static function store(Request $request) {
        //Validate request
        $request->validate( [
            'inp_event_name' => 'required|string|max:60',
            'inp_event_date' => 'required|date',
            'inp_location' => 'required|string|max:60',
            'inp_host_employee_id' => 'nullable|integer',
        ]);


        //Save Customer record
        Events::create([
            'event_name' => $request->inp_event_name,
            'event_date' => $request->inp_event_date,
            'location' => $request->inp_location,
            'host_employee_id' => $request ->inp_host_employee_id,


        ]);

        //Redirect back with success
        return redirect()->back()->with(key: 'success', value: 'Event Added Successfully');
    }
}

