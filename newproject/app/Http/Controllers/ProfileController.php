<?php

namespace App\Http\Controllers;
use App\User;
use Auth;
use Illuminate\Routing\Controller as BaseController;

use Illuminate\Http\Request;

class ProfileController extends BaseController
{
    public function profile(){
        $iduser = Auth::User()->id;
        $datauser = User::find($iduser);
        return view('profile',compact('datauser'));
    }
    public function showprofile(){
        $iduser = Auth::User()->id;
        $datauser = User::find($iduser);
        return view('showprofile', compact('datauser'));
    }
    public function postprofile(Request $request){
        $id = Auth::User()->id;
        $edituser = User::find($id);
        $edituser->name = $request->name;
        $edituser->phone = $request->phone;
        $edituser->address = $request->address;
        if($request->img!=null) {
            $edituser->img = $request->img;
                                }
        $edituser->save();
        return redirect()->intended('showprofile');
    }
}
