<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\CareerRequest;

class Career extends Model
{
    protected $table = 'careers';
    
    protected $fillable = ['title', 'description', 'experienced', 'disable' ];
   
    public function requests()
    {
        return $this->hasMany(CareerRequest::class);
    }

}
