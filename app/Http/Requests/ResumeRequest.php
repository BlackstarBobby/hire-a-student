<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ResumeRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'value.contact.first_name' => 'required',
            'value.contact.last_name' => 'required',
            'value.contact.title' => 'required',
            'value.contact.phone' => 'required',
            'value.contact.birth_date' => 'required|date',
            'value.contact.address' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'value.contact.first_name' => 'required',
            'value.contact.last_name' => 'required',
            'value.contact.title' => 'required',
            'value.contact.phone' => 'required',
            'value.contact.birth_date' => 'required|date',
            'value.contact.address' => 'required',
        ];
    }


}
