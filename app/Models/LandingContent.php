<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;


class LandingContent extends Model
{
      protected $table = 'landing_content';

      protected $fillable = ['landing_id','text_1','text_2','text_3','text_4','image_1','image_2','image_3'];
}