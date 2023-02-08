<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class StoreRestoRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'name' => [
                'required',
                'string',
                'max:250',
                Rule::unique('restos','name'),
            ],
            'description' => [
                'nullable',
                'string',
                'max:750',
            ],
            'address' => [
                'required',
                'string',
                'max:750',
            ],
        ];
    }
}
