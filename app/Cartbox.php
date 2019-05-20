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
    	return $this->hasMany('App\Cartbox_detail','idCartbox');
    }
   
   
}
