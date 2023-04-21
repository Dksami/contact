<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateContactRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'name'=>'required|max:50',
            'phone'=>'required|max:10'
        ];
    }
    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function messages(): array
    {
        return [
            'name.required' => 'arey :attribute ta hanana ',
            'phone.required' => 'aray :attribute pani hanana',
        ];
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function attributes(): array
    {
        return [
            'name' => 'naaam',
            'phone' => 'mobile',
        ];
    }
}
