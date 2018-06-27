<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Procedure extends Model
{
     protected $fillable=['name','price','user_id'];
    public function procedure(){
    	return $this->belongsTo('App\Procedure');
    }
}
