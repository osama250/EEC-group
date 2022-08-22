<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PharmacySeeder extends Seeder
{

    public function run()
    {

        DB::table('pharmacies')->insert( [
            [
                'name'          => 'El Ezaby' ,
                'address'       =>  'Cairo' ,
                'created_at'    => '2022-07-29 04:01:42'
            ] ,
            [
                'name'           => 'Ali and Ali Pharmacy' ,
                'address'        =>  'Cairo' ,
                'created_at'     => '2022-07-29 04:01:42'
            ] ,
            [
                'name'           => 'Egypt pharmacies' ,
                'address'        =>  'Cairo' ,
                'created_at'     => '2022-07-29 04:01:42'
            ]
        ]);
    }
}
