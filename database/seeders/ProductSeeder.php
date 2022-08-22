<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{

    public function run()
    {

        DB::table('products')->insert( [
            [
                'title'          => 'Panadol' ,
                'description'    => 'Very Health' ,
                'image'          => 'p.jpg',
                // 'price'          => 40 ,
                'quantity'       => 18 ,
                'created_at'     => '2022-07-29 04:01:42'
            ] ,
            [
                'title'          => 'Notosil' ,
                'description'    => 'Very Health' ,
                'image'          => 'm1.jpg',
                // 'price'          => 10 ,
                'quantity'       => 15 ,
                'created_at'     => '2022-07-29 04:01:42'
            ] ,
            [
                'title'          => 'Panadol' ,
                'description'    => 'Very Health' ,
                'image'          => 'p.jpg',
                // 'price'          => 30 ,
                'quantity'       => 15 ,
                'created_at'     => '2022-07-29 04:01:42'
            ] ,
            [
                'title'          => 'Notosil' ,
                'description'    => 'Very Health' ,
                'image'          => 'm1.jpg',
                // 'price'          => 20 ,
                'quantity'       => 15 ,
                'created_at'     => '2022-07-29 04:01:42'
            ] ,
            [
                'title'          => 'Panadol' ,
                'description'    => 'Very Health' ,
                'image'          => 'p.jpg',
                // 'price'          => 20 ,
                'quantity'       => 10 ,
                'created_at'     => '2022-07-29 04:01:42'
            ] ,
            [
                'title'          => 'Notosil' ,
                'description'    => 'Very Health' ,
                'image'          => 'm1.jpg',
                // 'price'          => 30 ,
                'quantity'       => 15 ,
                'created_at'     => '2022-07-29 04:01:42'
            ]
        ]);

    }
}
