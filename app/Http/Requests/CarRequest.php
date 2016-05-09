<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class CarRequest extends Request
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
            'brand' => 'required',
            'model' => 'required',
            'seats' => 'required|integer',
            'doors' => 'required|integer',
            'price_per_day' => 'required|min:1|numeric'
        ];
    }
}
