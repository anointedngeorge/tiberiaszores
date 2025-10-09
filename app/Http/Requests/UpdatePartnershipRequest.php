<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdatePartnershipRequest extends FormRequest
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
            'name' => ['string','required'],
            'phone' => ['string','required'],
            'email' => ['email','required'],
            'occupation' => ['string','required'],
            'dob' => ['string','required'],
            'tag' => ['string','required'],
            'address' => ['string','required'],
            // 'content' => ['string','nullable'],
            'image'      => ['image', 'nullable', 'mimes:jpeg,png,jpg,gif', 'max:2048']
        ];
    }
}
