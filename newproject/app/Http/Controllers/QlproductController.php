<?php


namespace App\Http\Controllers;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use App\Product;
use App\category;
use Illuminate\Http\Request;
class QlproductController extends BaseController
{
    public function getproductandcategory(){
        $dataproduct['dataproduct']= product::orderBy('id','desc')
            ->paginate(8);
        $datacategory['datacategory']= category::all();
        return view('qlproduct',$dataproduct,$datacategory);
    }

    public function deleteproduct($id){
        product::destroy($id);
        return back();
    }
    public function postproduct(Request $request) {
        $postproduct = new product();
        $postproduct->name = $request->name;
        $postproduct->price = $request->price;
        $postproduct->img = $request->img;
        $postproduct->idcata = $request->idcata;
        $postproduct->detail = $request->detail;
        $postproduct->save();
        return back();
    }
    function geteditproduct($id){
        $data['product'] = product::find($id);
        return view('updateproduct',$data);
    }
    function postedit(Request $request,$id) {
        $newproduct = product::find($id);
        $newproduct->name = $request->name;
        $newproduct->price = $request->price;
        if($request->img!=null) {
            $newproduct->img = $request->img;
        }
        $newproduct->detail = $request->detail;
        $newproduct->save();
        return redirect()->intended('qlproduct');
    }
}