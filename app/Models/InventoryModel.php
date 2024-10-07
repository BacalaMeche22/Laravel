<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InventoryModel extends Model
{
    use HasFactory;

    protected $table = 't_inventory';
    protected $fillable = [
        'item_name',
        'item_quantity',
        'item_category',

    ];

}
