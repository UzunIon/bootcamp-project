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
            'name' => [ 'required', 'string', 'min:2' ],
            'phone' => [ 'required', 'numeric', 'min:8' ],
            'services' => ['required', 'array', 'min:1', 'in:Tours,Attraction,Accommodation,Activities'],
            'message' => ['required', 'string', 'min:10'],
            'readTerms' => ['required'],
        ];
    }
}