<?php

namespace App\Http\Requests\Dashboard;

use App\Http\Requests\BaseFormRequest;


class StoreBlogRequest extends BaseFormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'name' => 'required',
            'created_by_who' => 'required',
            'description' => 'required',
            'image_path' => 'optional'
        ];
    }
}
