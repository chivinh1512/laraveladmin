<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class signupRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        $req = [
            'email'=>'required|email',
            'password'=>'required|min:6|max:20',
            'username'=>'required',
            're_password'=>'required|same:password'
        ];

        return $req;
    }

    public function messages() {
        return [
            'email.required' => "Vui long nhap email",
            'email.email'=>"Sai dinh dang email",
            'password.required'=>"vui long nhap password",
            'password.min'=>"mat khau it nhat 6 ky tu",
            'password.max'=>"mat khau nhieu nhat 20 ky tu"
        ];
    }
}
