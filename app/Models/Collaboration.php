<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\CollaborationCategory;
use App\Models\CollabTag;
use App\Models\User;
use App\Models\Visit;

class Collaboration extends Model
{
    protected $table = 'collaboration';

    protected $fillable = [
        'title','description','content','image','alt_image','category_id','user_id','token','url','status'
    ];

    public function category()
    {
        return $this->belongsTo(CollaborationCategory::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function tags()
    {
        return $this->belongsToMany(CollabTag::class);
    }

    public function hasTag($tagID)
    {
        $tags = $this->tags->pluck('id')->toArray();
        return in_array($tagID, $tags);
    }

    public function visits()
    {
        return $this->hasMany(Visit::class, 'page_token', 'token');
    }
}
