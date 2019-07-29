<?php


namespace App\Http\Controllers;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use App\category;
use Illuminate\Http\Request;

class QlcategoryController extends BaseController
{
    public function getcategory(){
        $data['data']= category::all();
        return view('qlcategory',$data);
    }
    public function deletecategory($id){
        category::destroy($id);
        return back();
    }
    function postcategory(Request $request) {
        $postcategory = new category();
        $postcategory->name = $request->name;
        $postcategory->save();
        return back();
    }

    public function geteditcategory($id){
        $data['cate'] = category::find($id);
        return view('updatecategory',$data);
    }
    function postedit(Request $request,$id) {
        $newcategory = category::find($id);
        $newcategory->name = $request->name;
        $newcategory->save();
        return redirect()->intended('qlcategory');
    }

}
