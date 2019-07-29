<?php


namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use App\Product;


class SearchController extends BaseController
{
    public function search(Request $req){
        $product = Product::where('name','like','%'.$req->key.'%')
            ->orWhere('price',$req->key)
            ->get();
        return view('search',compact('product', 'name'));
    }
}