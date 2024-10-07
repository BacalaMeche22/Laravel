<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LogsModel extends Model
{
    use HasFactory;

     
      protected $table = 't_logs';
      protected $fillable = [
          'employee_id',
          'log_date',
          'log_type',
          'description',
      ];
  
      
  }

