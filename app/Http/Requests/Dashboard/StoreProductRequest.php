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
            'name' => 'required|string',
            'price' => 'required|numeric',
            'discount' => 'numeric',
            'category' => 'required',
            'qty' => 'required|numeric',
            'description' => 'required'
        ];
    }
}