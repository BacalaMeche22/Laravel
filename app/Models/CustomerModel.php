<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CustomerModel extends Model
{
    use HasFactory;
    protected $table = 't_customer';
    protected $fillable = [
        'cus_first_name',
        'cus_last_name',
        'cus_email',
        'cus_phone_number',
        'cus_address',
        'cus_city',
        'cus_state',
        'cus_postal_code',
        'cus_country',
    ];


}


