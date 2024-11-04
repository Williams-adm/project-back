<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SupplierRequest extends FormRequest
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
            'name' => ['required', 'string', 'between:3,55'],
            'ruc' => ['required', 'numeric', 'min_digits:11', 'max_digits:11'],
            'email' => ['nullable', 'email:rfc,dns'],
            'phone' => ['required', 'numeric', 'min_digits:9'],
            'address' => ['required', 'string', 'between:5,75'],
        ];
    }
}
