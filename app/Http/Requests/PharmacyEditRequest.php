<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PharmacyEditRequest extends FormRequest
{

    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            // 'name'              => 'required|unique:pharmacies,name,'. $this->id ,
            'name'              => 'required'. $this->id ,
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
