<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreCompanyRequest extends FormRequest
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
            'name' => 'required|string|max:255',
            'street' => 'required|string|max:255',
            'house_number' => 'required|integer',
            'postal_code' => 'required|integer',
            'city' => 'required|string',
            // Überprüfen, ob der Benutzer existiert.
            'user_id' => 'required|exists:users,id',
        ];
    }
}
