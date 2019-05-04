<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Food extends Model
{
    //
    protected $table="food";
    public $timestamps = false;
    public function getLocation()
    {
    	return $this->belongsTo('App\Location','idLocation','id');
    }
}
