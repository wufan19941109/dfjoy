<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
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
        return [
            //表单字段 =>规则名 多个规则用|隔开
            'emplName' =>'required|between:3,10',
            'password' => 'required',
            'cap'=>'required|captcha'
        ];
    }
    //错误提示信息
    public function messages()
    {
        return [
            'emplName.required' =>'用户名不能为空',
            'emplName.between' => '用户名在3到10个字之间',
            'password.required' =>'密码不能为空',
            'cap.required'=>'验证码不能为空',
            'cap.captcha'=>'验证码不正确'
        ];

    }
}
