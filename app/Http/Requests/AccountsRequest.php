<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class AccountsRequest extends Request
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
            'fname' => 'required|min:3',
            'lname' => 'required:min:3',
            'phone' => 'required|min:8',
            'email' => 'required|email|unique:users',
            'id_number' => 'required|min:3',
            'position' => 'required|min:5',
            'region_id' => 'required',
            'jobdescription' => 'required'
        ];
    }
}
