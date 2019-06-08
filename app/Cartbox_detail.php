<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cartbox_detail extends Model
{
    //
    protected $table="cartbox_detail";
    public $timestamps = false;
    public function getFood()
    {
    	return $this->hasOne('App\Food','id','idFood');
    }
    
}
