<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PasswordRequest extends FormRequest
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
            "password.required"=>"رمز عبور قبلی نباید خالی باشد",
            "password.min"=>"رمز عبور قبلی باید حداقل شامل 6 کارکتر باشد",
            "password1.required"=>"رمز عبور جدید نباید خالی باشد",
            "password1.min"=>"رمز عبور جدید باید حداقل شامل 6 کارکتر باشد",
            "password1.confirmed"=>"کلمه عبور با هم مطابقت ندارند",
          "password_confirmation.required"=>"تکرار رمز عبور جدید نباید خالی باشد",
            "password_confirmation.min"=>"تکرار رمز عبور جدید باید حداقل شامل 6 کارکتر باشد",
            "same.confirmed"=>"کلمه عبور با هم مطابقت ندارند",


        ];

    }


    public function rules()
    {
        return [
            "password"=>"required|min:6",
            "password1"=>"required|min:6",
            "password_confirmation"=>"min:6|same:password1",

        ];
    }
}
