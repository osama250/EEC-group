<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PharmacyRequest extends FormRequest
{

    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'name'              => 'required|unique:pharmacies|max:100',
            'address'           => 'required',
        ];
    }

    public function messages()
    {
        return [
            'name.required'      => ' Must Be Write Name of Pharmcy' ,
            'name.unique'        => ' this name exsits' ,
            'name.max'           => ' name must be less than 100 character',
            'address.required'   => ' Must Be Write Address of Pharmcy'
        ];
    }
}
