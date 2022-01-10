<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class paymentOrders extends Model
{
    protected $table = 'payment_orders';
    
    protected $fillable = ['order_id','course_id','request_id'];
   
}
