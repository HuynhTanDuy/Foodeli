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
use App\Cartbox_detail;
use App\Order;
use App\Comment;
class PageController extends Controller
{
	function __construct()
	{
		$news= News::all();
		$cartbox=Cartbox::find(1);
    $user= User::all();
    $comment = Comment::all();

		view()->share('news',$news);
		view()->share('cartbox',$cartbox->getDetail);
    view()->share('user',$user);
    view()->share('comment',$comment);
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

  public function Reservation($id)
  {
    $location=Location::find($id);
    return view('pages.reservation',['location'=>$location]);
  }


	public function postLogin(Request $rq)
	{

		 $this->validate( $rq, 
          	[
          		'email'=>'required',
          		'password'=>'required',
          		
          	],[
              'email.required'=>'Vui lòng nhập email',

              'password.required'=>'Vui lòng nhập mật khẩu ',
             
            
          	]);
		 if (Auth::attempt(['email' => $rq->email, 'password' => $rq->password])) 
            {
              return redirect('home');

            }
            else {
            	return redirect ('login')->with('loi','Sai tài khoản hoặc mật khẩu');
            }
           
	}

    public function postLoginToOrder(Request $rq)
  {

     $this->validate( $rq, 
            [
              'email'=>'required',
              'password'=>'required',
              
            ],[
              'email.required'=>'Vui lòng nhập email',

               'password.required'=>'Vui lòng nhập mật khẩu ',
             
            
            ]);
     if (Auth::attempt(['email' => $rq->email, 'password' => $rq->password])) 
            {
              return redirect('checkout');

            }
            else {
              return redirect ('checkout');
            }
           
  }

  public function getLogin()

  {
  	return view('pages.login');
  }
  
  public function getLogout()
  {
    Auth::logout();
    return redirect('home');
  }
 
   public function getRegister()
   {
    return view('pages.register');
   }
   public function postRegister(Request $rq)
   {
    $this->validate($rq, 
            [
              'name'=>'required|min:3|max:50',
              'email'=>'required',
              'phone_number'=>'required',
              'address'=>'required',
              'password'=>'required|min:6|max:50',
              'password2'=>'required|same:password'
            ],[
              'name.required'=>'Vui lòng nhập họ tên',
               'phone_number.required'=>'Vui lòng nhập số điện thoại',
               'address.required'=>'Vui lòng nhập địa chỉ nơi ở',
              'name.min'=>'Tên có độ dài 3 đến 100 kí tự',
               'name.max'=>'Tên có độ dài từ 3 đến 100 kí tự',
               'email.required'=>'Vui lòng nhập email',
               'password.required'=>'Vui lòng nhập mật khẩu',
                'password.min'=>'MatKhau có độ dài 6 đến 50 kí tự',
                'password.max'=>'MatKhau có độ dài từ 6 đến 50 kí tự',
                'password2.required'=>'Vui lòng xác nhận mật khẩu',
                'password2.same'=>'Vui lòng nhập mật khẩu giống nhau',
            
            ]);
    $user= new User;
    $user->name=$rq->name;
    $user->email=$rq->email;
    $user->phone_number=$rq->phone_number;
    $user->address=$rq->address;
    $user->password= bcrypt($rq->password);
    $user->save();
    return redirect('register')->with('thongbao','Đăng kí thành công');
   }
  public function getProfile($id)
    {
    $user=User::find($id);
    return view('pages.profile',['user'=>$user]);
    }
  
	public function Cartbox()
	{
		$cartbox=Cartbox::find(1);
		echo $cartbox->getFood->name;
	}

  public function postComment($id, Request $rq)
   {
    $comment = new Comment;
    $comment->content=$rq->comment_area;
    $comment->idLocation=$id;
    $comment->idUser=Auth::id();
    $comment->save();
    return redirect('location/'.$id);
   }
  
	public function Order($id)
	{
		$order= Cartbox::find(Auth::user()->id);
    $order_detail=new Cartbox_detail;
    $order_detail->idCartBox=$order->id;
    $order_detail->idFood=$id;
    $order_detail->save();
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

  public function PlaceOrder(Request $request)
  {
     $this->validate($request, 
            [
              'addressShip'=>'required',
              'phoneNumberShip'=>'required',
              'paymentMethod'=>'required',
              
            ],[
              'addressShip.required'=>'Vui lòng nhập địa chỉ ship',
              'phoneNumberShip.required'=>'Vui lòng nhập số điện thoại',
              'paymentMethod.required'=>'Vui lòng chọn phương thức thanh toán',
                         
            ]);
   if ($request->paymentMethod==1) $this->validate($request, 
            [
              'card_name'=>'required',
              'card_type'=>'required',
              'card_number'=>'required',
              
            ],[
              'card_name.required'=>'Vui lòng nhập tên chủ thẻ',
              'card_type.required'=>'Vui lòng nhập loại thẻ',
              'card_number.required'=>'Vui lòng nhập số thẻ',
                         
            ]);

    $order=new Order;
    $order->idCartBox=1;
    $order->address=$request->addressShip;
    $order->phone_number=$request->phoneNumberShip;
    $order->payment_method=$request->paymentMethod;
    if ($request->paymentMethod==1) {
      
      $order->card_name=$request->card_name;
      $order->card_type=$request->card_type;
      $order->card_number=$request->card_number;
    }
    $order->save();

    //Clear cartbox
    $cartbox=Cartbox::where('idUser',Auth::user()->id)->get();
    $cartboxDetail=Cartbox_detail::where('idCartBox',$cartbox[0]->id)->get();
    foreach ($cartboxDetail as $c) {
      $c->delete();
     // $c->save();
    }
   
   return redirect('checkout_inform')->with('annoucement','Đặt hàng thành công');


  }

  public function Checkout_inform()
  {
    return view('pages.checkout_inform');
  }
  
  public function Test()
  {


    echo $cartboxDetail;

  }
  
}