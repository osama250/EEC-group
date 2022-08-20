<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Pharmacy;


class PharmacySeeder extends Seeder
{

    public function run()
    {

        Pharmacy::create([
            'name'     => 'El Ezaby' ,
            'address'  =>  'Cairo'
        ]);

        Pharmacy::create([
            'name'     => 'Ali and Ali Pharmacy' ,
            'address'  =>  'Cairo'
        ]);

        Pharmacy::create([
            'name'     => 'Egypt pharmacies' ,
            'address'  =>  'Cairo'
        ]);
    }
}
