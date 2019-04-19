<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Location;
use App\Slider;
class PageController extends Controller
{
	function __construct()
	{

	}
	public function Home()
	{
		$category=Category::all();
		$location=Location::all();
		$slide=Slider::all();
	//	echo $category[0]->getLocation[0];
		return view('layout.index',['category'=>$category,'location'=>$location,'slide'=>$slide]);
	}


}