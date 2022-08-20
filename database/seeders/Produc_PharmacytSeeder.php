<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Product_Pharmacay;

class Produc_PharmacytSeeder extends Seeder
{

    public function run()
    {
        Product_Pharmacay::create([
            'product_id'   => 1 ,
            'pharmacy_id'  => 1
        ]);

        Product_Pharmacay::create([
            'product_id'   => 1 ,
            'pharmacy_id'  => 2
        ]);

        Product_Pharmacay::create([
            'product_id'   => 1 ,
            'pharmacy_id'  => 3
        ]);

    }
}
