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
            'title'        => fake()->name() ,
            'description'  => fake()->text() ,
            'image'        => fake()->title() ,
            'price'        => fake()->randomDigit() ,
            'quantity'     => fake()->randomDigit() ,

        ];
    }
}