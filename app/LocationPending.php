<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LocationPending extends Model
{
    //
    protected $table="location_pending";
    public $timestamps = false;
  	public function users(){
    	return $this->hasOne('App\User','id','idUser');
    }
    
     
}
