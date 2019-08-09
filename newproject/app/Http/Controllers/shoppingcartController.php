<?php

namespace App\Http\Controllers;

use App\billdetail;
use Illuminate\Http\Request;

class shoppingcartController extends Controller
{
    public function showcart(){
        return view('shoppingcart');
    }
    public function postbill(Request $request){
        $idproduct = $request['idproduct'];
        $amount = $request['amount'];


        foreach ($idproduct as $key => $value){
            $billdetail = new billdetail();
            $billdetail->amount = $amount[$key];
            $billdetail->idproduct = $idproduct[$key];
            $billdetail->save();
        }

        return back();
    }

//"idproduct" => "28"
//"amount" => "1"





//"idproduct" => array:2 [▼
//0 => "31"
//1 => "28"
//]
//"amount" => array:2 [▼
//0 => "1"
//1 => "1"

// =>
//{
    //"idproduct" => "31"
    //"amount" => "1"

        // +

    //"idproduct" => "28"
    //"amount" => "1"
// }
}
