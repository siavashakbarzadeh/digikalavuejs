<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProfileRequest extends FormRequest
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

    public  function messages(){


        return [
          "mobile.required"=>"شماره تلفن همراه خالی نباید باشد",
          "mobile.unique"=>"کاربری قبلا با این شماره همراه ثبت نام کررده است",
          "email.required"=>"ایمیل خالی نباید باشد",
          "email.unique"=>"کاربری قبلا با این ایمیل ثبت نام کرده است",

        ];

    }


    public function rules()
    {
        return [
           "mobile"=>"required|unique:users",
           "email"=>"required|unique:users"
        ];
    }
}
