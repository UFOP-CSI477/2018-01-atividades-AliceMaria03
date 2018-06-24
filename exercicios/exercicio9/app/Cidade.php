<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cidade extends Model
{
    protected $fillable =['nome','estado_id'];
   /*protected $guarded= ['senha'];*/
    
    
}
