<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Users extends Model
{
     protected $fillable=['name','email','password','type'];
    public function users(){
    	return $this->belongsTo('App\Users');
    }
}
