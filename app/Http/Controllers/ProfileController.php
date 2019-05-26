<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Category;
use App\Location;
use App\Slider;
use App\News;
use App\Food;
use App\Cartbox;
use App\User;
use App\Order;
use App\Cartbox_detail;
class ProfileController extends Controller
{
	function __construct()
	{
		  $news= News::all();
		  $cartbox=Cartbox::all();
    	$user= User::all();
      $order= Order::all();
      $cartbox_detail=Cartbox_detail::all();
		  view()->share('news',$news);
		  view()->share('cartbox',$cartbox);
    	view()->share('user',$user);
      view()->share('order',$order);
      view()->share('cartbox_detail',$cartbox_detail);
	}
	
   public function getProfile($id)
   {

    $user=User::find($id);

  
  return view('pages.profile',['user'=>$user]);
    }
    public function postProfile($id, Request $rq)
    {
    	$profile=User::find($id);
    	$this->validate($rq, 
            [
              'name'=>'required|min:3|max:100',
              'address'=>'required',
              'phone_number'=>'required',
           
            ],[
              'name.required'=>'Vui lòng nhập tên',
              'address.required'=>'Vui lòng nhập địa chỉ',
              'phone_number.required'=>'Vui lòng nhập số điện thoại',
              'name.min'=>'Họ tên có độ dài từ 3 đến 100 kí tự',
              'name.max'=>'Họ tên có độ dài từ 3 đến 100 kí tự',
              
            ]);

    	$profile->name=$rq->name;
    	$profile->address=$rq->address;
    	$profile->phone_number=$rq->phone_number;
    	if($rq->changePass=="on")

    	{     

    		$profile->password = bcrypt($rq->password);
    		$this->validate($rq, 
          	[
          		
          		'password'=>'required|min:6|max:50',
          		'password2'=>'required|same:password'
          	],[
               'password.min'=>'Mật khẩu có độ dài từ 6 đến 50 kí tự',
               'password.max'=>'Mật khẩu có độ dài từ 6 đến 50 kí tự',
               'password.required'=>'Vui lòng nhập mật khẩu',
               'password2.required'=>'Vui lòng xác nhận mật khẩu',
               'password2.same'=>'Vui lòng nhập mật khẩu giống nhau',
            
          	]);
    		
    	}
    	$profile->save();
    	return redirect('profile/'.$id)->with('thongbao','Cập nhật thông tin cá nhân thành công');
    }
    public function getLocationRegister($id)
    {
      
      $cartbox= Cartbox::all();
      $cartbox_detail=Cartbox_detail::all();
      $user= User::all();
       return view('pages.location-register');

    }
}
