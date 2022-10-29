<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BrandTypeRequest extends FormRequest
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
            'type-name' => 'required_if:type-check,on|max:50|unique:types,name',
            'brand-name' => 'required_if:brand-check,on|max:50|unique:brands,name',
        ];
    }

    public function attributes()
    {
        return [
            'type-name' => 'Назва типу',
            'brand-name' => 'Назва бренду',
        ];
    }
}
