<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class pharmacyProductRequest extends FormRequest
{

    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'pharmacy_id'   => 'required' ,
            'product_id'    => 'required'
        ];
    }
}
