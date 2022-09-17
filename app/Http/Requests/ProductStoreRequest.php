<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductStoreRequest extends FormRequest
{
    public function rules()
    {
        return [
            'title' =>['required'],
            'slug' => ['required'],
            'description' => ['required'],
            'price' => ['required'],
            'image' => ['required']
        ];
    }

    public function authorize()
    {
        return true;
    }
}
