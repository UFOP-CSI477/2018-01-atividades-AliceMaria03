<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tests extends Model
{
     protected $fillable=['user_id','procedure_id','date'];
    public function test(){
    	return $this->belongsTo('App\Test');
    }
}
