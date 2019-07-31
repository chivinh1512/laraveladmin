<?php


namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Foundation\Bus\DispatchesJobs;
use App\Http\Requests\loginRequest;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Support\Facades\Auth;

class LoginController extends BaseController
{
    public function login(){
        return view('login');
    }
    public function postlogin(loginRequest $request)
    {
        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
            // Authentication passed...
            return redirect()->intended('dashboard');
        }
        dd('error');
        $credentitals = array('email'=>$req->email,'password'=>$req->password);
            if (Auth::attempt($credentitals)){
                return redirect()->back()->with('success','Đăng nhập thành công');
            }
        dd($credentitals);


    }
}