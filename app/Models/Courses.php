<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Courses extends Model
{
    protected $table = 'courses';
    
    protected $fillable = ['name', 'price_eg', 'price_sa','start_date', 'end_date', 'students_limit', 'image', 'category_id','disable','description'];

    public function category(){
        return $this->belongsTo('App\Models\Categories','category_id');
    }
}
