<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;


class LandingModel extends Model
{
      protected $table = 'landing';

      protected $fillable = ['url','name','showcase','description'];
}