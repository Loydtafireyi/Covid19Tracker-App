<?php

namespace App\Http\Requests\Spent;

use Illuminate\Foundation\Http\FormRequest;

class CreateSpentRequest extends FormRequest
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
            'spent' => 'required',
            'product_id' => 'required',
            'focus_area_id' => 'required',

        ];
    }
}
