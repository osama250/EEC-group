<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Pharmacy>
 */
class PharmacyFactory extends Factory
{

    public function definition()
    {
        return [
            'name'      =>  fake()->company() ,
            'address'   =>  fake()->city()
        ];
    }
}
