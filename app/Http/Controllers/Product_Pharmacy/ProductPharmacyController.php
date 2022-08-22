<?php

namespace App\Http\Controllers\Product_Pharmacy;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Pharmacy;
use App\Models\Pharmacay_product;
use App\Http\Requests\pharmacyProductRequest;

class ProductPharmacyController extends Controller
{
    public function index()
    {
        $pharmacies  = Pharmacy::get();
        $Products    = Product::get();
        return view('Pharmacy_Product.index' , compact('pharmacies' , 'Products'));
    }
    public function store( Request $request )
    {

        $pharmacy = Pharmacy::find($request->pharmacy_id);


        if ( !$pharmacy ) {
            return redirect()->route('Pro_Pharmacy');
        }

        // $pharmacy->products()->syncWithoutDetaching( [
        //  'product_id'  => $request->product_id ,
        //  'price'      =>  $request->price ] );
        foreach ( $request->product_id as $product  ) {
            Pharmacay_product::updateOrCreate([
                'pharmacy_id' => $request->pharmacy_id,
                'product_id'  => $product ,
                'price'       => $request->price,
            ]);
        }

        return redirect()->route('Pro_Pharmacy');
    }
}
