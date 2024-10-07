<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tasks extends Model
{
    use HasFactory;
    protected $table = 't_tasks';

    protected $fillable = [
        'project_id',
        'assigned_to',
        'task_description',
        'due_date',
        'status',
    ];
}

