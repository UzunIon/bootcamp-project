<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactUsRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }
    public function rules(): array
    {
        return [
            'email' => [ 'required', 'string', 'email'],
            'name' => [ 'required', 'min:2', 'string' ],
            'phone' => [ 'required', 'min:8', 'integer' ],
            'services' => ['required', 'array', 'min:1', 'in:tours,attraction,accommodation,activities'],
            'message' => ['required', 'string', 'min:10'],
            'readTerms' => ['required'],
        ];
    }
}