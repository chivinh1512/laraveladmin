<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\slide;
use Session;


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
            ->paginate(8);
        $cart = session()->get('cart');
        return view('/home',compact('slide','newproduct'));
    }
    public function post_card($product_id)
    {
        $check= true;
        $data=product::find($product_id);
        $cart = session()->get('cart');
        if(isset($cart)){
            foreach ($cart as $key =>$value){
                if(isset($value[$product_id])){
                    $cart[$key][$product_id]['amount']++;
                    session()->put('cart', $cart);
                    $check=false;
                }
            }
        }
        if($check){
            $cart = [
                $data['id'] => [
                    "name" => $data['name'],
                    "amount" =>1,
                    "price" =>$data['price'] ,
                    "img" => $data['img']
                ]
            ];
            Session::push('cart', $cart);
        }
        return redirect()->back()->with('success','Đã thêm vào giỏ hàng');
    }
    public function removeproduct(Request $request, $id){
        $newCart = Session::get('cart');   //lấy ss gán biến newcart
        $stt = $request->get('stt');    // lấy stt(j) gán biến $stt
        unset($newCart[$stt]);
        $request->session()->forget('cart');    //xóa session
        foreach ($newCart as $carts) {
            foreach ($carts as $key => $cart) {
                $data = product::find($key);
                    $cart = [
                        $data['id'] => [
                            "name" => $data['name'],
                            "amount" => $cart['amount'],
                            "price" => $data['price'],
                            "img" => $data['img']
                        ]
                    ];
                    Session::push('cart', $cart);
             };
        }
        return redirect()->back();
    }
}
