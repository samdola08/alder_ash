<?php

namespace App\Http\Requests\User;

use Illuminate\Foundation\Http\FormRequest;

class StoreUserRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        $allowedTypes = $this->input('allowed_user_types', []);

        $typeRule = !empty($allowedTypes)
            ? 'required|in:' . implode(',', $allowedTypes)
            : 'required|in:1,2,3,4';

        return [
            'first_name' => 'required|string|max:50',
            'last_name' => 'nullable|string|max:50',
            'email' => 'required|email|unique:users,email',
            'phone' => 'nullable|string|max:20|unique:users,phone',
            'password' => 'required|string|min:6|confirmed',
            'type' => $typeRule,
            'status' => 'required|in:0,1,2',
            'role' => 'required|string|exists:roles,name',
            'image' => 'nullable|image|max:2048',
        ];
    }

    public function messages(): array
    {
        return [
            'first_name.required' => 'First name is required.',
            'email.required' => 'Email is required.',
            'email.unique' => 'This email is already taken.',
            'password.required' => 'Password is required.',
            'password.min' => 'Password must be at least 6 characters.',
            'password.confirmed' => 'Password confirmation does not match.',
            'type.required' => 'User type is required.',
            'type.in' => 'You are not allowed to create this user type.',
            'status.required' => 'Status is required.',
            'status.in' => 'Invalid status value.',
            'role.required' => 'Role is required.',
            'role.exists' => 'Selected role does not exist.',
        ];
    }
}
