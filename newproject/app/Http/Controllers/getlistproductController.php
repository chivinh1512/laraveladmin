<?php


namespace App\Http\Controllers;
use App\Product;
use Illuminate\Routing\Controller as BaseController;


class getlistproductController extends BaseController
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function getlistproduct($listproduct){
        $listproduct=Product::where('idcata',$listproduct)->get();
        return view('listproduct',compact('listproduct'));
    }
}
