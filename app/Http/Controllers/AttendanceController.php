<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AttendanceModel;

class AttendanceController extends Controller
{
    //
    public static function index() {
         $attendance = AttendanceModel::get();
        return view(view: 'pages.attendance.index')->with(key: ['attendance' => $attendance]);
    }
    public static function store(Request $request) {
        //Validate request
        $request->validate( [
        'inp_attendance_date' => 'required|String|max:255',
        'inp_employee_id' => 'required|String|max:255',
        'inp_status' => 'required|string',
        'inp_check_in_time"' => 'nullable|String|max:20',
        'inp_check_in_out' => 'nullable|String|max:255',
        ]);


        //Save Customer record
        AttendanceModel::create([
            'attendance_date' => $request->inp_attendance_date,
            'employee_id' => $request->inp_employee_id,
            'status' => $request->inp_status,
            'check_in_time' => $request ->inp_check_in_time,
            'check_out_time' => $request->inp_check_in_out,




        ]);

        //Redirect back with success
        return redirect()->back()->with(key: 'success', value: 'Attendance Added Successfully');
    }
}
