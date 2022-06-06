<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SignUpForStudioRequest extends FormRequest {
    /**
     * Indicates if the validator should stop on the first rule failure.
     *
     * @var bool
     */
    protected $stopOnFirstFailure = true;

    /**
     * Get the error messages for the defined validation rules.
     *
     * @return array<string, mixed>
     */
    public function messages(): array {
        return [
            'name.required'     => 'A name is required.',
            'email.required'    => 'A valid email address is required.',
            'phone.required'    => 'A phone number is required.',
            'language.required' => 'A language is required.',
            'skills.required'   => 'Some information here is required.',
            'dates.required'    => 'Some information here is required.',
            'comments.required' => 'Some information here is required.',
        ];
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules(): array {
        return [
            'studio-name' => 'required|string',
            'name'        => 'required|string|max:255',
            'email'       => 'required|email|max:255',
            'phone'       => 'required|string|max:255',
            'language'    => 'required|string|max:255',
            'skills'      => 'required|string',
            'dates'       => 'required|string',
            'comments'    => 'required|string',
        ];
    }
}
