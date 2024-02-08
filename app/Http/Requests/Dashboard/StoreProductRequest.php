<?php

namespace App\Http\Requests\Dashboard;

use App\Http\Requests\BaseFormRequest;

class StoreProductRequest extends BaseFormRequest
{

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'product_name' => 'required|string',
            'price' => 'required|numeric',
            'discount' => 'numeric',
            // 'discount' => 'numeric|nullable',
            'category' => 'required',
            'qty' => 'required|numeric',
            'description' => 'required'
        ];
    }
}
