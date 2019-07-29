<?php


namespace App\Http\Controllers;
use App\Product;
use Illuminate\Routing\Controller as BaseController;

class getproductdetailController extends BaseController
{
    public function getproductdetail($detail){
        $detail=product::find($detail);
        $idcata=$detail->idcata;
        $spcungloai=product::where('idcata',$idcata)->whereNotIn ('id', $detail)->get();
        return view('productdetail',compact('detail','spcungloai'));
    }
}
