<?php

namespace App\Http\Requests\Recovered;

use Illuminate\Foundation\Http\FormRequest;

class UpdateRecoveredRequest extends FormRequest
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
            'province_id' => 'required',
            'date_reported' => 'string',
            'recovered' => 'required',
        ];
    }
}
