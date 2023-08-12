<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Recipe>
 */
class RecipeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $title = fake()->sentence(5);
        $slug = Str::slug($title, '-');
        return [
            'user_id' => User::all()->random()->id,
            'title' => $title,
            'image' => fake()->imageUrl(850, 350),
            'content' => fake()->text(200),
            'slug' => $slug
        ];
    }
}
