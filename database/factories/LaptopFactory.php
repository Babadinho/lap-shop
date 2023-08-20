<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class LaptopFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'brand'=> fake()->company(),
             'model'=> fake()->company(),
             'processor' => fake()->macProcessor(),
             'ram' => fake()->randomLetter(),
             'storage' => fake()->randomLetter(),
             'graphics_card' => fake()->randomLetter(),
             'condition' => fake()->randomLetter(), 
             'features' => fake()->randomLetter(), 
             'price'=> fake()->numberBetween(50_000, 2_000_000)
        ];
    }
}
