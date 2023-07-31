<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\ContactForm>
 */
class ContactFormFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => fake()->name(20),
            'title' => fake()->realText(50),
            'email' => fake()->unique()->email(),
            'url' => fake()->url(),
            'gender' => fake()->boolean(),
            'age' => fake()->numberBetween(1, 6),
            'contact' => fake()->realText(),


        ];
    }
}
