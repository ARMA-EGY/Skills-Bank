<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Blog;

class Category extends Model
{
    protected $table = 'categories_blog';
    
    protected $fillable = ['name','url'];
   
    public function posts()
    {
        return $this->hasMany(Blog::class);
    }

}
