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
        
        $location=Location::find($id);
        $location->name=$request->name;
        $location->address=$request->address;
        $location->idCategory=$request->idCategory;
        $location->avatar=$request->avatar;
        $location->openTime=$request->openTime;
        $location->closeTime=$request->closeTime;
        $location->points=$request->points;
        $location->shipCharge=$request->shipCharge;

       
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
        $location->avatar=$request->avatar;
        $location->openTime=$request->openTime;
        $location->closeTime=$request->closeTime;
        $location->points=$request->points;
        $location->shipCharge=$request->shipCharge;

       
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