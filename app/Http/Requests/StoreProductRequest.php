<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreProductRequest extends FormRequest
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

    public function messages()
    {
        return [
            'name.min' => 'Il nome deve essere di almeno 3 caratteri',
            'name.max' => 'Il nome deve essere massimo di 200 caratteri',
            'name.required' => 'Il campo nome è obbligatorio',
            'description.min' => 'La descrizione deve essere di almeno 3 caratteri',
            'description.required' => 'Il campo descrizione è obbligatorio',
            'quantity.required' => 'Il campo quantità è obbligatorio', 
            'quantity.min' => 'La quantità minima è di 1 pezzo'
        ];
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name' => ['required', 'min:3', 'max:200' ],
            'description' => ['required', 'min:3', 'max:200'],
            'quantity' => ['required', 'min:1']
        ];
    }
}
