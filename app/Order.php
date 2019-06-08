<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    //
    protected $table="order";
    public $timestamps = false;
 
 public function getCartbox()

    {
    	return $this->hasOne('App\Cartbox','id','idCartbox');
    }
public function getUser()
{
	return $this->hasOne('App\User','id','idUser');
}
   
}
