<?php 
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Location;
use App\Category;
class LocationController extends Controller
{
    public function getLocation()
    {
        $location=Location::all();
        return view('admin.location.list',['location'=>$location]);
    }
    public function Edit($id)
    {
        $category=Category::all();
        $location=Location::find($id);
        return view('admin.location.edit',['location'=>$location,'category'=>$category]);
    }
    public function EditPost(Request $request,$id)
    {
        $this->validate($request,
        [
            'name'=>'required',
            'address'=>'required',
            'idCategory'=>'required',
            
            'openTime'=>'required',
            'closeTime'=>'required',
           
            'shipCharge'=>'required',

            
        ],
        [   
            'name.required'=>"Bạn chưa nhập tên quán ăn",
            'address.required'=>"Bạn chưa nhập địa chỉ",
            'idCategory.required'=>"Bạn chưa nhập thể loại",
            
            'openTime.required'=>"Bạn chưa nhập giờ mở cửa",
            'closeTime.required'=>"Bạn chưa nhập giờ đóng cửa",
           
           
        ]);
        
        $location=Location::find($id);
        $location->name=$request->name;
        $location->address=$request->address;
        $location->idCategory=$request->idCategory;
      
        $location->openTime=$request->openTime;
        $location->closeTime=$request->closeTime;
        $location->points=$request->points;
        $location->shipCharge=$request->shipCharge;
         if($request->hasFile('avatar'))
          {
            $file=$request->file('avatar');
            $name=$file->getClientOriginalName();
            $avatar=str_random(4)."_". $name;
             $duoi=$file->getClientOriginalExtension();
          if($duoi !='jpg' && $duoi!='png' && $duoi!='jpeg')
          {
             return redirect('admin/location/edit/'.$id)->with('errors','Chỉ được thêm đuôi png, jpg, jpeg');
          }
       while(file_exists("images/food/".$avatar))
       {

        $avatarHinh=str_random(4)."_".$name;
       }
       $file->move("images/food/",$avatar);
        unlink("images/food/".$location->avatar);
       $location->avatar=$avatar;
          }
      else {
        $location->avatar="";
      }

       
        $location->save(); 


        return redirect('admin/location/list')->with('annoucement','Sửa thông tin quán ăn ăn thành công');
      
    }

    public function Add()
    {
        $category=Category::all();
        return view('admin.location.add',['category'=>$category]);
    }
    public function AddPost(Request $request)
    {
       $this->validate($request,
        [
            'name'=>'required',
            'address'=>'required',
            'idCategory'=>'required',
            'avatar'=>'required',
            'openTime'=>'required',
            'closeTime'=>'required',
            'points'=>'required',
            'shipCharge'=>'required',

            
        ],
        [   
            'name.required'=>"Bạn chưa nhập tên quán ăn",
            'address.required'=>"Bạn chưa nhập địa chỉ",
            'idCategory.required'=>"Bạn chưa nhập thể loại",
            'avatar.required'=>"Bạn chưa nhập ảnh đại diện",
            'openTime.required'=>"Bạn chưa nhập giờ mở cửa",
            'closeTime.required'=>"Bạn chưa nhập giờ đóng cửa",
            'points.required'=>"Bạn chưa nhập điểm",
           
        ]);
        
        $location=new Location;
        $location->name=$request->name;
        $location->address=$request->address;
        $location->idCategory=$request->idCategory;
       
        $location->openTime=$request->openTime;
        $location->closeTime=$request->closeTime;
        $location->points=$request->points;
        $location->shipCharge=$request->shipCharge;
if($request->hasFile('avatar'))
          {
            $file=$request->file('avatar');
            $name=$file->getClientOriginalName();
            $avatar=str_random(4)."_". $name;
             $duoi=$file->getClientOriginalExtension();
          if($duoi !='jpg' && $duoi!='png' && $duoi!='jpeg')
          {
             return redirect('admin/location/add')->with('errors','Chỉ được thêm đuôi png, jpg, jpeg');
          }
       while(file_exists("images/food/".$avatar))
       {

        $avatarHinh=str_random(4)."_".$name;
       }
       $file->move("images/food/",$avatar);
        
       $location->avatar=$avatar;
          }
      else {
        $location->avatar="";
      }

       
        $location->save(); 


        return redirect('admin/location/list')->with('annoucement','Thêm quán ăn ăn thành công');
      
      
    }
    public function Delete($id)
    {
        $location=Location::find($id);
        $location->delete();
        return redirect('admin/location/list')->with('annoucement','Xóa quán ăn thành công');
     }

}   
 ?>