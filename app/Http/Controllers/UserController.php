<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\User;
class UserController extends Controller
{
    
    public function getDangNhapAdmin()
    {
        return view('admin.login');
    }

    public function postDangNhapAdmin(Request $request)
    {
        $this->validate($request,
        [
            
            'name'=>'required',
            'password'=>'required',
        ],
        [
            'password.required'=>'Bạn chưa nhập password',
            'name.required'=>'Bạn chưa nhập tên',
                       
        ]);
      if (Auth::attempt(['name'=>$request->name,'password'=>$request->password]))

        {
            return redirect('admin/information/list')->with('annoucement','Đăng nhập thành công');
        }
        else {
            return redirect('admin/login')->with('annoucement','Đăng nhập thất bại');
        }
    }

    public function getDangXuatAdmin()
    {
        Auth::logout();
        return redirect('admin/login');
    }

    public function getUser()
    {
        $user=User::all();
        return view('admin.user.list',['user'=>$user]);
    }
    public function Edit($id)
    {
        $user=User::find($id);
        return view('admin.user.edit',['user'=>$user]);
    }
    public function EditPost(Request $request,$id)
    {
        $this->validate($request,
        [
            'name'=>'required',
            'email'=>'required',
            'phone_number'=>'required',
            'address'=>'required',
            'password'=>'required',
            
            
            
        ],
        [   
            'name.required'=>"Bạn chưa nhập tên",
            'email.required'=>"Bạn chưa nhập email",
            'phone_number.required'=>"Bạn chưa nhập số điện thoại",
            'address.required'=>"Bạn chưa nhập địa chỉ",
            'password.required'=>"Bạn chưa nhập mật khẩu mới",
           

           
        ]);
        
        $user=User::find($id);
        $user->name=$request->name;
        $user->email=$request->email;
        $user->phone_number=$request->phone_number;
        $user->address=$request->address;
        $user->password=$request->password;
      
       
    
        $user->save(); 


        return redirect('admin/user/list')->with('annoucement','Sửa thông tin User thành công');
      
    }

    public function Add()
    {
        return view('admin.user.add');
    }
    public function AddPost(Request $request)
    {
      $this->validate($request,
        [
            'name'=>'required',
            'email'=>'required',
            'phone_number'=>'required',
            'address'=>'required',
            'password'=>'required',
            
            
            
        ],
        [   
            'name.required'=>"Bạn chưa nhập tên",
            'email.required'=>"Bạn chưa nhập email",
            'phone_number.required'=>"Bạn chưa nhập số điện thoại",
            'address.required'=>"Bạn chưa nhập địa chỉ",
            'password.required'=>"Bạn chưa nhập mật khẩu mới",
           

           
        ]);
        
        $user=new User;
        $user->name=$request->name;
        $user->email=$request->email;
        $user->phone_number=$request->phone_number;
        $user->address=$request->address;
        $user->password=$request->password;
      
       
    
        $user->save(); 


        return redirect('admin/user/list')->with('annoucement','Thêm User thành công');
      
      
    }
    public function Delete($id)
    {
        $user=User::find($id);
        $user->delete();
        return redirect('admin/user/list')->with('annoucement','Xóa User thành công');
     }
}

