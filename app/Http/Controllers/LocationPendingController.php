<?php 
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\LocationPending;
use App\Location;

class LocationPendingController extends Controller
{
    public function getLocationPending()
    {
        $location_pending= LocationPending::all();
        return view('admin.location_pending.list',['location_pending'=>$location_pending]);
    }
    public function postAcceptLocation(Request  $rq, $id)
    {
        $location_pending= LocationPending::find($id);
        $location = new Location;

        $location->name= $location_pending->name;
        $location->avatar="images/food/buffet2.jpg";
        $location->address=$location_pending->address;
        $location->idCategory= $location_pending->category;
        $location->phone_number= $location_pending->phone_number;
        $location->description= $location_pending->description;
        $location->website=$location_pending->website;
        $location->email=$location_pending->email;
        $location->idOwner= $location_pending->idUser;
        $location_pending->users->authority=2;
        $location_pending->users->save();
        $location->save();
        $location_pending->delete();
        return redirect('admin/location_pending/list')->with('annoucement','Duyệt cửa hàng thành công');
    }
    public function getDeleteLocation($id){
    	 $location_pending= LocationPending::find($id);
    	 $location_pending->delete();
    	 return redirect('admin/location_pending/list')->with('annoucement','Xóa cửa hàng thành công');
    }

}   
 ?>