<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Expenses;

class ExpensesController extends Controller
{
    public static function index() {
        $expenses = Expenses::get();
        return view(view: 'pages.expenses.index')->with(key: ['expenses' => $expenses]);
    }


    public static function store(Request $request) {
        //Validate request
        $request->validate( [
            'inp_expense_category' => 'required|string|max:255',
            'inp_amount' => 'required|numeric', 
            'inp_date_incurred' => 'required|date', 
            'inp_employee_id' => 'nullable|string|max:20', 
        ]);


        //Save Customer record
        Expenses::create([
            'expense_category' => $request->inp_expense_category,
            'amount' => $request->inp_amount,
            'date_incurred' => $request->inp_date_incurred,
            'employee_id' => $request ->inp_employee_id,


        ]);

        //Redirect back with success
        return redirect()->back()->with(key: 'success', value: 'Expenses Added Successfully');
    }
}

