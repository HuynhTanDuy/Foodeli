<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    //
    protected $table="comment";
    public $timestamps = false;
    public function location(){
    	return $this->belongsTo('App/Location','idLocation','id');

    }
    public function user(){
    	return $this->belongsTo('App\User','idUser','id');
    }
}