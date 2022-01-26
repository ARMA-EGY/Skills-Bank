<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;


class LandingMessage extends Model
{
      protected $table = 'landing_messages';

      protected $fillable = ['name','email','phone','company','position','message'];
}