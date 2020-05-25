<?php

namespace App\Http\Requests\Infections;

use Illuminate\Foundation\Http\FormRequest;

class CreateInfectionsRequest extends FormRequest
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
            'date_reported' => 'required',
            'infections' => 'required',
            'region_code' => 'required'
        ];
    }
}
