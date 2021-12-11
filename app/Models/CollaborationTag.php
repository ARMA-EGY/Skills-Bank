<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CollaborationTag extends Model
{
    protected $table = 'collaboration_tag';
    
    protected $fillable = [
        'blog_id','tag_id',
    ];

}
