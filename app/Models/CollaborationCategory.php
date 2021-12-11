<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Collaboration;

class CollaborationCategory extends Model
{
    protected $table = 'categories_collaboration';
    
    protected $fillable = ['name','url'];
   
    public function posts()
    {
        return $this->hasMany(Collaboration::class);
    }

}
