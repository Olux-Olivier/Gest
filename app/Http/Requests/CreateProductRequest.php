<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateProductRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'product_name' => ['required', 'min:3'],
            'price' => ['required', 'min:2'],
            'quantity_in_stock' => ['required'],
        ];
    }

    public function prepareForValidate(){
        $this->merge([
            'product_name' => $this->input('product_name') ?: 
            $this->input('price') ?: 
            $this->input('quantity_in_stock')
        ]);
    }
}
