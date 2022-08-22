<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    public function definition()
    {
        return [
            'title'        => fake()->word(),
            'description'  => fake()->text($maxNbChars = 100 ) ,
            'image'        => null,
            'price'        => fake()->numberBetween($min = 1 , $max = 999) ,
            'quantity'     => fake()->numberBetween($min = 1 , $max = 1000 ) ,
        ];
    }
}
