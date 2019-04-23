<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Location;
use App\Slider;
use App\News;
class PageController extends Controller
{
	function __construct()
	{
		$news= News::all();
            view()->share('news',$news);
	}
	public function Home()
	{
		$category=Category::all();
	
		$location=Location::where('Reserve',0)->get();
		$location_reserve=Location::where('Reserve',1)->get();
		$slide=Slider::all();
		
	//	echo $category[0]->getLocation[0];

		return view('pages.home',['category'=>$category,'location'=>$location,'slide'=>$slide,'location_reserve'=>$location_reserve]);

		
	}
	public function News($title,$id)
	{
              $news=News::find($id);
              $latestNews= News::orderBy('id', 'DESC')->take(2)->get();
              $relatedNews= News::where('highlight',1)->take(4)->get();
              return view('pages.news-detail',['news'=>$news,'relatedNews'=>$relatedNews,'latestNews'=>$latestNews]);
	}


}