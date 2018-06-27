<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
     protected $fillable=['name','email','password','type'];
    public function user(){
    	return $this->belongsTo('App\User');
    }
}
