<?php


namespace App\Http\Controllers;
use http\Env\Request;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;


class SignupController extends BaseController
{
    public function signup(){
        return view('signup');
    }
    public function postsignup(Request $req){
        $this->validate(
            [
                'email'=>'required|email|unique:user,email',
                'password'=>'required|min:6|max:20',
                'fullname'=>'required',
                're_password'=>'required|same:password'
            ],
            [
                'email.required'=>'Vui lòng nhập email',
                'email.email'=>'Sai định dạng email',
                'email.unique'=>'Email đã có người sử dụng',
                'password.required'=>'Vui lòng nhập password',
                're_password.same'=>'Mật khẩu không giống nhau',
                'password.min'=>'Mật khẩu ít nhất 6 ký tự'
            ]);
        $user = new User();
        $user->fullname = $req->fullname;
    }
}