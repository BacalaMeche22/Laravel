<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Departments;

class DepartmentsController extends Controller
{
    public static function index() {
        $departments = Departments::get();
        return view(view: 'pages.departments.index')->with(key: ['departments' => $departments]);
     }
 
 
     public static function store(Request $request) {
        $request->validate([
            'inp_department_name' => 'required|string|max:60',
            'inp_manager_id' => 'nullable|integer|max:60',
            'inp_location' => 'nullable|string|max:60',
        ]);

        // Save project record
        Departments::create([
            'department_name' => $request->inp_department_name, 
            'manager_id' => $request->inp_manager_id, 
            'location' => $request->inp_location,
        ]);

        // Redirect back with success
        return redirect()->back()->with('success', 'Department Added Successfully');
    }
}

