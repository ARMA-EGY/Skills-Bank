<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Categories extends Model
{
    protected $table = 'categories';
    
    protected $fillable = ['name','disable'];

    public function courses()
    {
        return $this->hasMany('App\Models\Courses','category_id');
    }
}
