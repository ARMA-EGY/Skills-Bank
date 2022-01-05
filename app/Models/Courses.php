<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Courses extends Model
{
    protected $table = 'courses';
    
    protected $fillable = ['name', 'price','start_date', 'end_date', 'time_from', 'time_to', 'students_limit', 'image', 'category_id','disable','description','schedule','type','lang','top_month'];

    public function category(){
        return $this->belongsTo('App\Models\Categories','category_id');
    }
}
