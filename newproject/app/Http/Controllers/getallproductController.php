<?php


namespace App\Http\Controllers;
use Illuminate\Routing\Controller as BaseController;
use App\product;

class getallproductController extends BaseController
{
    public function getallproduct(){
        $allproduct=Product::orderBy('id','desc')
        ->paginate(16);
        return view('product',compact('allproduct'));
    }
}