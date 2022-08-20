<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductEditRequest extends FormRequest
{

    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'title'            => 'required|max:100',
            'description'      => 'required|required',
            'image'            => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'price'            => 'required|numeric' ,
            'quantity'         => 'required|numeric'
        ];
    }

    public function messages()
    {
        return [
            'title.required'      => ' Must Be Write Name of Product' ,
            'title.unique'        => ' this name exsits' ,
            'title.max'           => ' name must be less than 100 character',
            'description.required'   => 'Must Be Write description of Product' ,
            'price.required'      => 'Must Be Write Price' ,
            'price.numeric'       => 'Price Must be Number' ,
            'quantity.required'   => 'Quantity Must Be Wrtie' ,
            'quantity.numeric'    => 'quantity Must Be Number' ,
        ];
    }
}
