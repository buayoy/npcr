<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreUserRequest extends FormRequest
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
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users,email,'.$this->get('id'),
            'password' => 'required|string|min:6|confirmed',
        ];
    }

    public function messages(){
        return [
            'name.required' => 'กรุณากรอกชื่อ - นามสกุล',
            'email.required' => 'กรุณากรอกชื่อบัญชีผู้ใช้งาน',
            'email.unique' => 'มีชื่อบัญชีผู้ใช้งานนี้แล้วในระบบ',
            'password.required' => 'กรุณายืนยันรหัสผ่าน',
            'password.confirmed' => 'ยืนยันรหัสผ่านไม่ถูกต้อง',
        ];
    }
}
