<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AttendanceModel extends Model
{
    use HasFactory;
     protected $table = 't_attendance';
     protected $fillable = [
        'attendance_date',
        'employee_id',
        'status',
        'check_in_time',
        'check_out_time',

     ];
 }
