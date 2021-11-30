<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Career;

class CareerRequest extends Model
{
    protected $table = 'career_request';

    protected $fillable = [
        'name','email','phone','available_date','cv','career_id'
    ];

    public function career()
    {
        return $this->belongsTo(Career::class);
    }
}