<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Departments extends Model
{
    use HasFactory;
    protected $table = 't_departments';
    protected $primaryKey = 'department_id';
    protected $fillable = [
        'department_name',
        'manager_id',
        'location',
    ];
}