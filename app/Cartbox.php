<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cartbox extends Model
{
    //
    protected $table="cartbox";
    public $timestamps = false;
    public function getFood()
    {
    	return $this->hasMany('App\Food','idCategory','id');
    }
}
