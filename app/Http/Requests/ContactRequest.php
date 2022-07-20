<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name' => "required|string|min:3|max:20",
            'email' => "required|string|email",
            'phone' => "required|numeric|digits:10",
            'subject' => "required|string|min:5|max:255",
            'message' => "required|string|min:5",
        ];
    }

}
