<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class ElementsModel extends Model
{

      protected $table = 'elements';

      protected $fillable = [
        'component_id','name','content','type'
    ];
    


}