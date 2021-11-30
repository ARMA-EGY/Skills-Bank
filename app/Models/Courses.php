<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Courses extends Model
{
    protected $table = 'courses';
    
    protected $fillable = ['name', 'price_eg', 'price_sr','start_date', 'end_date', 'students_limit', 'image', 'category_id','disable'];

    public function category(){
        return $this->belongsTo('App\Models\Categories','category_id');
    }
}
