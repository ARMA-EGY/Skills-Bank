<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Client;

class CategoryClient extends Model
{
    protected $table = 'categories_clients';
    
    protected $fillable = ['name','disable'];
   
    public function clients()
    {
        return $this->hasMany(Client::class,'category_id');
    }

}
