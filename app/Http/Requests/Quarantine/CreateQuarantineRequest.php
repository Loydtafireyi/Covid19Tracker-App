<?php

namespace App\Http\Requests\Quarantine;

use Illuminate\Foundation\Http\FormRequest;

class CreateQuarantineRequest extends FormRequest
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
            'quarantine_centre' => 'required',
            'tollfree' => 'required',
            'telephone' =>'required',
        ];
    }
}
