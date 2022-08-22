<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Produc_PharmacytSeeder extends Seeder
{

    public function run()
    {
        DB::table('pharmacy_product')->insert( [
            [
                'price'        => 10 ,
                'product_id'   => 1 ,
                'pharmacy_id'  => 1 ,
                'created_at'   => '2022-07-29 04:01:42'
            ] ,
            [
                'price'        => 10 ,
                'product_id'   => 1 ,
                'pharmacy_id'  => 2 ,
                'created_at'   => '2022-07-29 04:01:42'
            ] ,
            [
                'price'        => 10 ,
                'product_id'   => 1 ,
                'pharmacy_id'  => 3 ,
                'created_at'   => '2022-07-29 04:01:42'
            ] ,
            [
                'price'        => 10 ,
                'product_id'   => 2 ,
                'pharmacy_id'  => 1 ,
                'created_at'   => '2022-07-29 04:01:42'
            ] ,
            [
                'price'        => 10 ,
                'product_id'   => 2 ,
                'pharmacy_id'  => 2 ,
                'created_at'   => '2022-07-29 04:01:42'
            ] ,
            [
                'price'        => 10,
                'product_id'   => 2 ,
                'pharmacy_id'  => 3 ,
                'created_at'   => '2022-07-29 04:01:42'
            ]
        ]);

    }
}
