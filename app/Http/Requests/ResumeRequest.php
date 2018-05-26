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
            'value.basic.first_name' => 'required',
            'value.basic.last_name' => 'required',
            'value.basic.title' => 'required',
            'value.basic.phone' => 'required',
            'value.basic.birth_date' => 'required|date',
            'value.basic.address' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'value.basic.first_name.required' => 'Prenumele este necesar',
            'value.basic.last_name.required' => 'Numele este necesar',
            'value.basic.title.required' => 'Titlul este necesar',
            'value.basic.phone.required' => 'Numarul este necesar',
            'value.basic.birth_date.required' => 'Data nasterii este necesara',
            'value.basic.address.required' => 'Adresa este necesara',
        ];
    }


}
