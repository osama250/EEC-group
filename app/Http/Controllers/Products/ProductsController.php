<?php

namespace App\Http\Controllers\Products;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Pharmacy;
use App\Http\Requests\ProductRequest;
use App\Http\Requests\ProductEditRequest;
use App\Http\Requests\SearchRequest;
use App\Trait\saveimage;

class ProductsController extends Controller
{
    use saveimage;

    public function index()
    {
        $products  = Product::get();
        return view('Products.index' , compact('products'));
    }

    public function create()
    {
        $pharmacies  = Pharmacy::get();
        return view('Products.create' , compact('pharmacies'));
    }

    public function store(ProductRequest $request)
    {
           $path        = 'images/Prodcut_Image';
           $filename    = $this->Uploadphoto( $request->image , $path );

        Product::create([
            'title'        => $request->title ,
            'description'  => $request->description ,
            'image'        => $filename ,
            'price'        => $request->price ,
            'quantity'     => $request->quantity ,
        ]);
        return redirect()->route('Products.index');
    }

    public function show($id)
    {
        $product = Product::with('pharmacies')->findorfail($id);
        return view('Products.detail' , compact('product'));
    }

    public function edit($id)
    {
        $product = Product::findorfail($id);
        return  view('Products.edit' , compact('product'));
    }

    public function update( ProductEditRequest $request, $id)
    {
        if (empty($request->image)) {
            $filename  =  $request->old;
        } else {
            $path        = 'images/Prodcut_Image';
            $filename    = $this->Uploadphoto( $request->image , $path);
        }
        $product = Product::findorfail($id);
        $product->update([
            'title'        => $request->title ,
            'description'  => $request->description ,
            'image'        => $filename ,
            'price'        => $request->price ,
            'quantity'     => $request->quantity ,
        ]);
        return redirect()->route('Products.index');
    }

    public function destroy($id)
    {
        $product = Product::findorfail($id)->delete();
        return redirect()->route('Products.index');
    }

    public function Search( Request $request ) {
        $search   =  $request->name;
        $products = Product::query()->where('title', 'LIKE', "%{$search}%")->get();
        return view('Products.search' , compact('products') );
    }
}
