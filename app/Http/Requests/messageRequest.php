<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class messageRequest extends FormRequest
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
            'name' =>'required',
            'cap'=>'required|captcha'
        ];
    }
    //错误提示信息
    public function messages()
    {
        return [
            'name.required' =>'用户名不能为空',
            'cap.required'=>'验证码不能为空',
            'cap.captcha'=>'验证码不正确'
        ];

    }
}
