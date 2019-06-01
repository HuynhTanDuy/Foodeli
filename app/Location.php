<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Location extends Model
{
    //
    protected $table="location";
    public $timestamps = false;
     public function comment(){
     	return $this->hasMany('App\Comment','idLocation','id');
     }
     public function category()
     {
     	return $this->hasOne('App\Category','id','idCategory');
     }
}
