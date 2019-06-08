<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cartbox extends Model
{
    //
    protected $table="cartbox";
    public $timestamps = false;
    public function getDetail()
    {
    	   return $this->hasMany('App\Cartbox_detail','idCartbox','id');
    }
    public function getDetail1()
    {
         return $this->hasOne('App\Cartbox_detail','idCartbox','id');
    }
    public function getUser()
    {
    	return $this->belongsTo('App\User','idUser','id');
    }
   
   
}
