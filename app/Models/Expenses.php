<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Expenses extends Model
{
    use HasFactory;

 
 protected $table = 't_expenses';
 protected $primaryKey = 'expense_id';
 protected $fillable = [
     'expense_category',
     'amount',
     'date_incurred',
     'employee_id',
 ];

}