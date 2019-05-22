<?php 
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\News;

class NewsController extends Controller
{
    public function getNews()
    {
        $news=News::all();
        return view('admin.news.list',['news'=>$news]);
    }
    public function Edit($id)
    {
        
        $news=News::find($id);
        return view('admin.news.edit',['news'=>$news]);
    }
    public function EditPost(Request $request,$id)
    {
        $this->validate($request,
        [
            'tittle'=>'required',
            
            'summary'=>'required',
            'images'=>'required',
            'content'=>'required', 
            
        ],
        [   
            'tittle.required'=>"Bạn chưa nhập tiêu đề",
           
            'summary.required'=>"Bạn chưa nhập tóm tắt",
            'content.required'=>"Bạn chưa nhập nội dung",
           
        ]);
        
        $news=News::find($id);
        $news->tittle=$request->tittle;
        $news->highlight=0;
        $news->summary=$request->summary;
        $news->images=$request->images;
        $news->content=$request->content;
       
        $news->save(); 


        return redirect('admin/news/list')->with('annoucement','Sửa thông tin tin tức thành công');
      
    }

    public function Add()
    {
        
        return view('admin.news.add');
    }
    public function AddPost(Request $request)
    {
       $this->validate($request,
        [
            'tittle'=>'required',
           
            'summary'=>'required',
            'images'=>'required',
            'content'=>'required', 
            
        ],
        [   
            'tittle.required'=>"Bạn chưa nhập tiêu đề",
          
            'summary.required'=>"Bạn chưa nhập tóm tắt",
            'content.required'=>"Bạn chưa nhập nội dung",
           
        ]);
        
        $news=new News;
        $news->tittle=$request->tittle;
        $news->titlenosign="";
        $news->highlight=0;
        $news->summary=$request->summary;
        $news->images=$request->images;
        $news->content=$request->content;
       
        $news->save(); 


        return redirect('admin/news/list')->with('annoucement','Thêm tin tức thành công');
      
      
    }
    public function Delete($id)
    {
        $news=News::find($id);
        $news->delete();
        return redirect('admin/news/list')->with('annoucement','Xóa thể loại món ăn thành công');
     }

}   
 ?>