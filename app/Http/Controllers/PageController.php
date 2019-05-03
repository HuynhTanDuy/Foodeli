<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Location;
use App\Slider;
use App\News;
use App\Food;
use App\Cartbox;
class PageController extends Controller
{
	function __construct()
	{
		$news= News::all();
		$cartbox=Cartbox::all();
		view()->share('news',$news);
		view()->share('cartbox',$cartbox);
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

	public function Location($id)
	{
		$location=Location::find($id);
		$food=Food::where('idLocation',$id)->get();
		return view('pages.location',['location'=>$location,'food'=>$food]);
	}

	public function Cartbox()
	{
		$cartbox=Cartbox::find(1);
		echo $cartbox->getFood->name;
	}

	public function Order($id)
	{
		$order= new Cartbox;
		$order->idFood=$id;
		$order->save();
		return redirect('home');

	}

	public function DeleteOrder($id)
	{
		$order=Cartbox::find($id);
		$order->delete();
		return redirect('home');
	}

	public function Checkout()
	{
		return view('pages.checkout');
	}

}