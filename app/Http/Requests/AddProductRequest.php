<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AddProductRequest extends FormRequest
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
            'product-name' => 'required|max:100',
            'product-article' => 'required|digits:9',
            'product-price' => 'required|integer',
            'product-count' => 'required|integer',
            'product-descr' => 'required|min:5',
            'product-brand' => 'required',
            'product-type' => 'required',
        ];
    }

    public function attributes()
    {
        return [
            'product-name' => 'Назва товару',
            'product-article' => 'Артикул',
            'product-price' => 'Ціна товару',
            'product-count' => 'Кількість товару',
            'product-descr' => 'Опис товару',
            'product-brand' => 'Виберіть марку товару',
            'product-type' => 'Виберіть тип товару',
        ];
    }
}
