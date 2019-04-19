<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
//use App\Location;
class Category extends Model
{
    //
    protected $table="category";
    public $timestamps = false;
    public function getLocation()
    {
        return $this->hasMany('App\Location','idCategory','id');
    }
}
