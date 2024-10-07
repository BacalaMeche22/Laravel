<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Project;

class ProjectController extends Controller
{
    //
    public static function index() {
        $project = Project::get();
        return view(view: 'pages.project.index')->with(key: ['project' => $project]);
     }
 
 
     public static function store(Request $request) {
        $request->validate([
            'inp_project_name' => 'required|string|max:60', 
            'inp_start_date' => 'required|date', 
            'inp_end_date' => 'nullable|date|after:start_date', 
            'inp_status' => 'required|string',      
        ]);

        // Save project record
        Project::create([
            'project_name' => $request->inp_project_name, 
            'start_date' => $request->inp_start_date, 
            'end_date' => $request->inp_end_date,
            'status' => $request->inp_status, 
        ]);

        // Redirect back with success
        return redirect()->back()->with('success', 'Project Added Successfully');
    }
}