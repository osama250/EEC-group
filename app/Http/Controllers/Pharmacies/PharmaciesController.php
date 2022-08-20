<?php

namespace App\Http\Controllers\Pharmacies;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Pharmacy;
use App\Http\Requests\PharmacyRequest;
use App\Http\Requests\PharmacyEditRequest;

class PharmaciesController extends Controller
{

    public function index()
    {
        $pharmacies  = Pharmacy::get();
        return view('Pharmacy.index' , compact('pharmacies'));
    }

    public function create()
    {
        return view('Pharmacy.create');
    }

    public function store(PharmacyRequest $request)
    {
        Pharmacy::create([
            'name'     => $request->name ,
            'address'  => $request->address
        ]);
        return redirect()->route('Pharmacies.index');
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $pharmacy = Pharmacy::findorfail($id);
        return view('Pharmacy.edit' , compact('pharmacy') );
    }

    public function update( PharmacyEditRequest $request, $id )
    {
        $pharmacy = Pharmacy::findorfail($id);
        $pharmacy->update([
            'name'     => $request->name ,
            'address'  => $request->address
        ]);
        return redirect()->route('Pharmacies.index');
    }

    public function destroy($id)
    {
        $pharmacy = Pharmacy::findorfail($id)->delete();
        return redirect()->route('Pharmacies.index');
    }
}
