<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateMEventsRequest extends FormRequest
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
            'title' => ['string', 'required'],
            'content' => ['string', 'required'],
            'start' => ['string', 'required'],
            'end' => ['string', 'required'],
            'address' => ['string', 'required'],
            'date' => ['string', 'nullable'],
            'time' => ['string', 'required'],
            'image'  => ['image', 'nullable', 'mimes:jpeg,png,jpg,gif', 'max:2048']
        ];
    }
}
