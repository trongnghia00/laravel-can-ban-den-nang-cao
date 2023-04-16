<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LoginRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'username' => ['required', 'alpha_num', 'min:6', 'max:10'],
            'email' => ['required', 'email'],
            'password' => 'required'
        ];
    }

    public function messages()
    {
        return [
            'username.required' => 'Bạn phải nhập username !!!',
            'username.alpha_num' => 'Bạn chỉ được sử dụng chữ cái và số cho username',
            'username.min' => 'Username ít nhất 6 ký tự !!'
        ];
    }
}
