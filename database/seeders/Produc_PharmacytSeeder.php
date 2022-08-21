<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Pharmacay_product;

class Produc_PharmacytSeeder extends Seeder
{

    public function run()
    {
        Pharmacay_product::create([
            'product_id'   => 1 ,
            'pharmacy_id'  => 1
        ]);

        Pharmacay_product::create([
            'product_id'   => 1 ,
            'pharmacy_id'  => 2
        ]);

        Pharmacay_product::create([
            'product_id'   => 1 ,
            'pharmacy_id'  => 3
        ]);

    }
}
