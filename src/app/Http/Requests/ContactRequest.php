<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

use function PHPUnit\Framework\returnSelf;

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

    protected function prepareForValidation()
    {
        $this->merge([
            'tel' => ($this->tel1 ?? '') . ($this->tel2 ?? '') . ($this->tel3 ?? ''),
        ]);
    }

    public function rules()
    {
        return [
            'first_name' => ['required', 'string', 'max:8'],
            'last_name' => ['required', 'string', 'max:8'],
            'gender' => ['required'],
            'email' => ['required', 'email'],
            'tel1' => ['required', 'digits_between:1,5'],
            'tel2' => ['required', 'digits_between:1,5'],
            'tel3' => ['required', 'digits_between:1,5'],
            'address' => ['required'],
            // 'content' => ['required'],
            'building' => ['nullable'],
            'detail' => ['required', 'max:120']
        ];
    }

    public function messages()
    {
        return [
            'first_name.required' => '姓を入力してください',
            'first_name.string' => '姓を文字列で入力してください',
            'first_name.max' => '姓を8文字以下で入力してください',
            'last_name.required' => '名を入力してください',
            'last_name.string' => '名を文字列で入力してください',
            'last_name.max' => '名を8文字以下で入力してください',
            'gender.required' => '性別を入力してください',
            'email.required' => 'メールアドレスを入力してください',
            'email.email' => '有効なメールアドレス形式を入力してください',
            'tel1.required' => '電話番号を入力してください',
            'tel1.digits_between' => '電話番号を5桁以下で入力してください',
            'tel2.required' => '電話番号を入力してください',
            'tel2.digits_between' => '電話番号を5桁以下で入力してください',
            'tel3.required' => '電話番号を入力してください',
            'tel3.digits_between' => '電話番号を5桁以下で入力してください',
            'address.required' => '住所を入力してください',
            // 'content.required' => 'お問い合わせの種類を入力してください',
            'detail.required' => 'お問い合わせ内容を入力してください',
            'detail.max' => 'お問い合わせ内容を120文字以下で入力してください'
        ];
    }
}
