<?php

namespace App\Http\Controllers\Product_Pharmacy;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Pharmacy;
use App\Http\Requests\pharmacyProductRequest;

class ProductPharmacyController extends Controller
{
    public function index() {
        $pharmacies  = Pharmacy::get();
        $Products    = Product::get();
        return view('Pharmacy_Product.index' , compact('pharmacies' , 'Products'));
    }
    public function store( Request $request ) {

        $pharmacy = Pharmacy::find($request->pharmacy_id);

        if ( !$pharmacy ) {
            return redirect()->route('Pro_Pharmacy');
        }

        $pharmacy->products()->syncWithoutDetaching( $request->product_id );
        return redirect()->route('Pro_Pharmacy');
    }
}
