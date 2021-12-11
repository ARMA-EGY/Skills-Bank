<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TreeDescription extends Model
{
    protected $table = 'tree_description';
    
    protected $fillable = ['title','learningtree_id'];
}
