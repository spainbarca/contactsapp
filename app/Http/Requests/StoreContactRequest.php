<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreContactRequest extends FormRequest
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
            'name'=>'required|min:5',
            'phone_number' =>'required|regex:/^([0-9\s\-\+\(\)]*)$/|min:8',
            'email'=>'required|email',
            'age' =>'required|numeric|min:15',
            'profile_picture' => 'image|nullable'
        ];
    }
}
