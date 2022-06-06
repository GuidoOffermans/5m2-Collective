<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ShareStudioRequest extends FormRequest {
    /**
     * Indicates if the validator should stop on the first rule failure.
     *
     * @var bool
     */
    protected $stopOnFirstFailure = true;

    /**
     * Get the error messages for the defined validation rules.
     *
     * @return array
     */
    public function messages() {
        return [
            'name.required'           => 'A name is required.',
            'email.required'          => 'A valid email address is required.',
            'studio-name.required'    => 'A studio name is required.',
            'studio-address.required' => 'A studio address is required.',
            'studio-about.required'   => 'Some information here is required.',
            'studio-extra.required'   => 'Some information here is required.',
            'studio-key.required'     => 'Some information here is required.',
            'contact-name.required'   => 'A contact name is required.',
            'contact-email.required'  => 'A valid contact email address is required.',
        ];
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules() {
        return [
            'name'           => 'required|string|max:255',
            'phone'          => 'nullable',
            'email'          => 'required|email|max:255',
            'studio-name'    => 'required|string',
            'studio-address' => 'required|string',
            'studio-about'   => 'required|string',
            'studio-extra'   => 'required|string',
            'studio-key'     => 'required|string',
            'contact-name'   => 'required|string|max:255',
            'contact-email'  => 'required|email|max:255',
            'contact-phone'  => 'nullable',
        ];
    }
}
