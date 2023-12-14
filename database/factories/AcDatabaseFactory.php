<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

use function Laravel\Prompts\text;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\AcDatabase>
 */
class AcDatabaseFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'ac_id' => fake()->numberBetween(1, 10),
            'ac_name' => fake()->word(),
            'ac_url' => fake()->word(),
            'ac_title' => fake()->paragraph(1),
            'ac_text' => fake()->paragraph(5),
            'ac_image_path' => fake()->paragraph(1),
        ];
    }
}
