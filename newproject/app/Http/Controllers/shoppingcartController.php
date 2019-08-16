<?php

namespace App\Http\Controllers;

use App\billdetail;
use App\bills;
use Illuminate\Http\Request;
use Auth;
use App\Product;
class shoppingcartController extends Controller
{
    public function showcart(){

        return view('shoppingcart');
    }
    public function postbill(Request $request){
        $bills = new bills();
        $bills->iduser = Auth::User()->id;
        $bills->note = $request->note;
        $bills->total = $request->totalall;
        $bills->status = '1';
        $bills->save();
        $idbill = $bills->orderby('id', 'desc')->first('id');
        $id = ($idbill['id']);
        $idproduct = $request['idproduct'];
        $amount = $request['amount'];
        foreach ($idproduct as $key => $value){
            $billdetail = new billdetail();
            $billdetail->amount = $amount[$key];
            $billdetail->idproduct = $idproduct[$key];
            $billdetail->idbill = $id;
            $priceproduct = Product::where('id', $idproduct[$key])->value('price');
            $billdetail->price = $priceproduct;
            $billdetail->total = $priceproduct * $amount[$key];
            $billdetail->save();
        }
        $request->session()->forget('cart');
        return back()->with('ordered','Bạn đã đặt hàng thành công');

    }

}
