<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class LearningTree extends Model
{
    protected $table = 'learningtree';
    
    protected $fillable = ['title'];

    public function description(){
        return $this->hasMany('App\Models\TreeDescription','learningtree_id');
    }
}
