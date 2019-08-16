<?php

namespace App\Http\Controllers;
use App\billdetail;
use App\Product;
use Illuminate\Routing\Controller as BaseController;

use App\bills;
use Illuminate\Http\Request;

class QlbillsController extends BaseController
{
    public function getbills(){
        $databills= bills::orderBy('id','desc')
            ->paginate(8);
        return view('qlbills',compact('databills'));
    }
    public function getbilldetail($id){
        $billdetail= billdetail::where('idbill',$id)->get(); /*lay hang du lieu cua bang billdetail theo id*/
        foreach ($billdetail as $key => $value){         /*foreach de lay idproduct*/
            $idproduct=$value['idproduct'];             /*lay dc idproduct*/
            $nameProduct = Product::find($idproduct)->name;
            $billdetail[$key]['sanpham']=$nameProduct;
        }
            return view('billdetail',compact('billdetail'));
    }
    public function getstatus($id,$status){

        dd($id. $status);
    }
}
