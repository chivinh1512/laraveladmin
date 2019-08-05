<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class shoppingcartController extends Controller
{
    public function showcart(){
        return view('shoppingcart');
    }

}
