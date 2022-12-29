<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StorePostRequest extends FormRequest
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
            'name' => 'required',
            'code' => 'required',
            'author' => 'required',
            'pages' => 'required',
            'year' => 'required',
            'category' => 'required',
        ];
    }
    public function messages(){
        return [
            'name.required' => ' nhập tên sách!',
            'code.required' => ' nhập mã sách!',
            'author.required' => ' nhập tác giả sách!',
            'pages.required' => ' nhập số trang sách!',
            'year.required' => ' nhập năm sản xuất sách!',
            'category.required' => ' nhập loại sách!',
        ];
    }
}
