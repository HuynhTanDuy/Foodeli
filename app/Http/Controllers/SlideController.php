<?php 
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Slider;
class SlideController extends Controller
{
	public function getSlide()
	{
		$slide=Slider::all();
		return view('admin.slide.list',['slide'=>$slide]);
	}
	public function Edit($id)
	{
		$slide=Slider::find($id);
		return view('admin.slide.edit',['slide'=>$slide]);
	}
	public function EditPost(Request $request,$id)
	{
		$this->validate($request,
        [
                
            'image'=>'required',
            
        ],
        [   
            
            'image.required'=>"Bạn chưa nhập hình ảnh",
           
        ]);
        
        $slide=Slider::find($id);
       // $slide->link=$request->link;
        $slide->image=$request->image;
      
       
    
        $slide->save(); 


        return redirect('admin/slide/list')->with('annoucement','Sửa thông tin slide thành công');
      
	}

    public function Add()
    {
        return view('admin.slide.add');
    }
    public function AddPost(Request $request)
    {
       $this->validate($request,
        [
                
            'image'=>'required',
            
        ],
        [   
            
            'image.required'=>"Bạn chưa nhập hình ảnh",
           
        ]);
        
        
        $slide=new Slider;
        $slide->image=$request->image;
      
       
    
        $slide->save(); 


        return redirect('admin/slide/list')->with('annoucement','Thêm slide thành công');
      
    }
    public function Delete($id)
    {
        $slide=Slider::find($id);
        $slide->delete();
        return redirect('admin/slide/list')->with('annoucement','Xóa slide thành công');
     }

}	
 ?>