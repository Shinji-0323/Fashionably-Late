<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactRequest extends FormRequest
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
            'last_name' => ['required', 'string', 'max:255'],
            'first_name' => ['required', 'string', 'max:255'],
            'gender' => ['required'],
            'email' => ['required','email', 'string', 'max:255'],
            'tel1' => ['required','numeric'],
            'tel2' => ['required','numeric'],
            'tel3' => ['required','numeric'],
            'address' => ['required', 'string', 'max:255'],
            'detail' => ['required'],
            'category_id' => ['required','max:120'],
        ];
    }
    public function messages()
    {
        return [
        'first_name.required' => '姓を入力してください',
        'last_st_name.required' => '名を入力してください',
        'gender.required' => '性別を選択してください',
        'email.required' => 'メールアドレスを入力してください',
        'email.email' => 'メールアドレスはメール形式で入力してください',
        'tel1.required' => '電話番号を入力してください',
        'tel1.numeric' => '電話番号は5桁までの数字で入力してください',
        'tel1.max' => '電話番号は5桁までの数字で入力してください',
        'tel2.required' => '電話番号を入力してください',
        'tel2.numeric' => '電話番号は5桁までの数字で入力してください',
        'tel2.max' => '電話番号は5桁までの数字で入力してください',
        'tel3.required' => '電話番号を入力してください',
        'tel3.numeric' => '電話番号は5桁までの数字で入力してください',
        'tel3.max' => '電話番号は5桁までの数字で入力してください',
        'address.required' => '住所を入力してください',
        'detail.required' => 'お問い合わせの種類を選択してください',
        'category_id.required' => 'お問い合わせ内容を入力してください',
        'category_id.max:120' => 'お問合せ内容は120文字以内で入力してください'
        ];
    }
}
