<?php

namespace App\Http\Requests\Product;

use Illuminate\Foundation\Http\FormRequest;

class FilterProductRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'search' => 'string',
            'companies' => 'array|nullable',
            'companies.*' => 'numeric',
            'period' => 'array',
            'period.from' => 'numeric|nullable',
            'period.to' => 'numeric|nullable',
            'percent' => 'array',
            'percent.from' => 'numeric|nullable',
            'percent.to' => 'numeric|nullable',
            'sort' => 'string'
        ];
    }
}
