<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Pharmacy;
use App\Models\Product;
use App\Models\Pharmacay_product;

class DatabaseSeeder extends Seeder
{

    public function run()
    {

        // \App\Models\User::factory(10)->create();
        \App\Models\Pharmacy::factory(100)->create();
        \App\Models\Product::factory(100)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        $this->call([
        //     PharmacySeeder::class ,
        //     ProductSeeder::class ,
         Produc_PharmacytSeeder::class
        ]);
    }
}
