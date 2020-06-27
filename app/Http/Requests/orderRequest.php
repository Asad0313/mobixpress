<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

use App\order;

class orderRequest extends FormRequest
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
            //

            'first_name' => 'required',
            'address' => 'required',
            'last_name' => 'required',
            'phone' => 'required|numeric',
            'zip' => 'required|numeric',
            'email' => 'required',

        ];
    }
}
