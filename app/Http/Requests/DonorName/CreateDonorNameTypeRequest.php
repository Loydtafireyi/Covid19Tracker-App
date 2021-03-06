<?php

namespace App\Http\Requests\DonorName;

use Illuminate\Foundation\Http\FormRequest;

class CreateDonorNameTypeRequest extends FormRequest
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
            'name' => 'required|unique:donor_names',
            'donor_type_id' => 'required',
            'country_id' => 'required',
        ];
    }
}
