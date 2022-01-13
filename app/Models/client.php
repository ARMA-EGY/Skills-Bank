<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\CategoryClient;

class Client extends Model
{
    protected $table = 'clients';
    
    protected $fillable = ['name',  'image',  'category_id', ];

    public function category()
    {
        return $this->belongsTo(CategoryClient::class,'category_id');
    }

}