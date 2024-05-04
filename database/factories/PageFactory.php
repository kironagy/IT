<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Page>
 */
class PageFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'key' => fake()->unique()->word(),
            'content' => [
                'en' => fake()->text(70),
                'it' => fake()->text(70),
                'fr' => fake()->text(70),
                'de' => fake()->text(70),
            ],
        ];
    }
}
