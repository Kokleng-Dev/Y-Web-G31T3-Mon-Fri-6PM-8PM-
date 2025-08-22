<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    // protected $table = 'customers';
    protected $fillable = ['full_name', 'phone','address','customer_type_id','email'];
}
