<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Orders extends Model
{
    use HasFactory;

    protected $table = 't_orders'; 
    protected $primaryKey = 'order_id'; 
    protected $fillable = [
        'client_id',
        'order_date',
        'total_amount',
        'status',
    ];
}