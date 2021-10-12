<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductRequest extends FormRequest
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
            'name' => 'required|min:5|max:150',
            'price' => 'required|',
        ];
    }

    public function messages()
    {
        return [

            'name.required' => 'Tên sản phẩm không được để trống!',
            'price.required' => 'Giá tiền không được để trống!',
        ];
    }
}
