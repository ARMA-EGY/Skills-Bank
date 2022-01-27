<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Coupon extends Model
{
    protected $table = 'coupons';

    protected $fillable = 
    [
        'code', 'start_date', 'end_date', 'discount', 'off', 
    ];
}
