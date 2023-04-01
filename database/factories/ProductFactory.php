<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name_en' => fake()->name(),
            'name_se' => fake()->name(),
            'img' => 'img/tort-1.jpg',
            'price' => rand(100,900),
            'description_en' => 'opisanie',
            'product_category_id' => 1,

        ];
    }
}


