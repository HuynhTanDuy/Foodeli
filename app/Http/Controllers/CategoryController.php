<?php 
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Category;

class CategoryController extends Controller
{
    public function getCategory()
    {
        $category=Category::all();
        return view('admin.category.list',['category'=>$category]);
    }
    public function Edit($id)
    {
        
        $category=Category::find($id);
        return view('admin.category.edit',['category'=>$category]);
    }
    public function EditPost(Request $request,$id)
    {
        $this->validate($request,
        [
            'name'=>'required',
            
        ],
        [   
            'name.required'=>"Bạn chưa nhập tên thể loại món ăn",
           
        ]);
        
        $category=Category::find($id);
        $category->name=$request->name;
       
        $category->save(); 


        return redirect('admin/category/list')->with('annoucement','Sửa thông tin thể loại món ăn thành công');
      
    }

    public function Add()
    {
        
        return view('admin.category.add');
    }
    public function AddPost(Request $request)
    {
       $this->validate($request,
        [
            'name'=>'required',
            
        ],
        [   
            'name.required'=>"Bạn chưa nhập tên thể loại món ăn",
           
        ]);
        
        $category=new Category;
        $category->name=$request->name;
        $category->save(); 


        return redirect('admin/category/list')->with('annoucement','Thêm thể loại món ăn thành công');
      
      
    }
    public function Delete($id)
    {
        $category=Category::find($id);
        $category->delete();
        return redirect('admin/category/list')->with('annoucement','Xóa thể loại món ăn thành công');
     }

}   
 ?>