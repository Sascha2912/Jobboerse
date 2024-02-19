<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateUserRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        // Jeder Benutzer ist autorisiert, sein eigenes Profil zu aktualisieren.
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        $userId = $this->route('user')->id;
        // Regeln für Nicht-Admins.
        $rulesForNonAdmins = [
            'first_name' => 'string|max:255',
            'last_name' => 'string|max:255',
            'email' => 'string|email|max:255|unique:users,email,' .$userId,
            // Passwort ist optional und kann aktualisiert werden
            'password' => 'nullable|string|min:8',
        ];

        $rulesForAdmins = array_merge($rulesForNonAdmins, [
            'role' => 'required|string|in:admin,business_user,private_user',
        ]);

        return $rulesForNonAdmins;
    }
}
