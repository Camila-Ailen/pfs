<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreProducto extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'name' => 'required',
            'description' => 'required|min:5',
            'category'=>'required'
        ];
    }

    public function messages(): array {
        return [
            'name.required' => 'El nombre es obligatorio'
        ];
    }

    public function attributes(): array {
        return [
            'category' => 'categoria',
        ];
    }

    // public function withValidator($validator) {
    //     $validator->after(function ($validator) {
    //         if ($this->get('name') == 'test') {
    //             $validator->errors()->add('name', 'No se puede llamar test');
    //         }
    //     });
    // }



}
