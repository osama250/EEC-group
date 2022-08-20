<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductSeeder extends Seeder
{

    public function run()
    {

        Product::create([
            'title'          => 'tst' ,
            'description'    => 'Very Health' ,
            'imgae'          => 'tst.jpg',
            'price'          => 12 ,
            'quantity'       => 15
        ]);

        Product::create([
            'title'          => 'tst2' ,
            'description'    => 'Very Health' ,
            'imgae'          => 'tst.jpg',
            'price'          => 12 ,
            'quantity'       => 15
        ]);

        Product::create([
            'title'          => 'tst3' ,
            'description'    => 'Very Health' ,
            'imgae'          => 'tst.jpg',
            'price'          => 12 ,
            'quantity'       => 15
        ]);

    }
}
