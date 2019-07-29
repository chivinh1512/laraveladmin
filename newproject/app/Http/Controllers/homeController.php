<?php


namespace App\Http\Controllers;
use Illuminate\Routing\Controller as BaseController;
use App\Product;
use App\slide;


class homeController extends BaseController
{
    public function home (){
        $slide=slide::all();
        $newproduct=product::orderBy('id','desc')
            ->paginate(4);
        return view('/home',compact('slide','newproduct'));

    }
}