<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;
    protected $table = 't_projects';

   
    protected $primaryKey = 'project_id';
    protected $fillable = [
        'project_name',
        'start_date',
        'end_date',
        'status',
    ];
}
