<?php
namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Photo>
 */
class PhotoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'user_id'           => 1, 
            'image_path'        => 'photos/' . fake()->uuid() . '.jpg',
            'original_filename' => fake()->word() . '_' . fake()->numberBetween(1, 100) . '.jpg',
            'created_at'        => fake()->dateTimeBetween('-6 months', 'now'),
            'updated_at'        => now(),
        ];
    }
}