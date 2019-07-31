<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\slide;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
//    public function __construct()
//    {
//        $this->middleware('auth');
//    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function home()
    {
        $slide=slide::all();
        $newproduct=product::orderBy('id','desc')
            ->paginate(4);
        return view('/home',compact('slide','newproduct'));

    }
}
