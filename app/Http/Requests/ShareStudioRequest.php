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
            'language.required'       => 'A language is required.',
            'studio-name.required'    => 'A studio name is required.',
            'studio-address.required' => 'A studio address is required.',
            'studio-about.required'   => 'Some information here is required.',
            'studio-extra.required'   => 'Some information here is required.',
            'studio-infra.required'   => 'Some information here is required.',
            'studio-key.required'     => 'Some information here is required.',
            'contact-name.required'   => 'A contact name is required.',
            'contact-phone.required'  => 'A valid phone number is required.',
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
            'language'       => 'required|string|max:255',
            'studio-name'    => 'required|string',
            'studio-address' => 'required|string',
            'studio-about'   => 'required|string',
            'studio-extra'   => 'required|string',
            'studio-infra'   => 'required|string',
            'studio-key'     => 'required|string',
            'contact-name'   => 'required|string|max:255',
            'contact-phone'  => 'required|string|max:255',
        ];
    }
}
