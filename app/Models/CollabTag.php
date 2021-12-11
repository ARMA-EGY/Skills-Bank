<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Collaboration;

class CollabTag extends Model
{
    protected $table = 'collab_tag';
    protected $fillable = ['name'];
    
    public function posts()
    {
        return $this->belongsToMany(Collaboration::class);
    }

}
