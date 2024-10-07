<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tasks;

class TasksController extends Controller
{
    //
    public static function index() {
        $tasks = Tasks::get();
        return view(view: 'pages.tasks.index')->with(key: ['tasks' => $tasks]);
     }
 
 
     public static function store(Request $request) {
        $request->validate([
            'inp_project_id' => 'required|integer',
            'inp_assigned_to' => 'required|integer',
            'inp_task_description' => 'required|string',
            'inp_due_date' => 'required|date',
            'inp_status' => 'required|string',
        ]);

        // Save project record
        Tasks::create([
            'project_id' => $request->inp_project_id, 
            'assigned_to' => $request->inp_assigned_to, 
            'task_description' => $request->inp_task_description, 
            'due_date' => $request->inp_due_date,
            'status' => $request->inp_status, 
        ]);

        // Redirect back with success
        return redirect()->back()->with('success', 'Task Added Successfully');
    }
}