<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    use HasFactory;
    protected $table = 't_clients'; 
    protected $primaryKey = 'client_id'; 
    protected $fillable = [
        'client_name',
        'contact_email',
        'phone_number',
        'address'
    ];
}

