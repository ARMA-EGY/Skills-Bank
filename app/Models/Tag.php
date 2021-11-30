<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Blog;

class Tag extends Model
{
    
    protected $fillable = ['name'];

    public function posts()
    {
        return $this->belongsToMany(Blog::class);
    }

}
