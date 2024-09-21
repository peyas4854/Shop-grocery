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
            'name' => $this->faker->randomElement([
                'Organic Bananas',
                'Whole Milk',
                'Brown Eggs',
                'Chicken Breast',
                'Almond Butter',
                'Whole Wheat Bread',
                'Cheddar Cheese',
                'Olive Oil',
                'Greek Yogurt',
                'Canned Tuna',
                'Peanut Butter',
                'Oatmeal',
                'Tomato Sauce',
                'Frozen Peas',
                'Broccoli',
                'Orange Juice',
                'Avocados',
                'Pasta',
                'Rice',
                'Dark Chocolate'
            ]),
            'description' => $this->faker->paragraph(),
            'price' => $this->faker->randomFloat(2, 10, 100), // Price between 10.00 and 100.00
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
