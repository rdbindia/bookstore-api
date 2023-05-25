<?php

namespace Database\Factories;

use App\Models\Author;
use App\Models\Publisher;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Book>
 */
class BookFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => $this->faker->title(),
            'description' => $this->faker->paragraph(),
            'publisher_id' => $this->faker->randomElement(Publisher::pluck('publisher_id')),
            'author_id' => $this->faker->randomElement(Author::pluck('author_id')),
            'cover_photo' => $this->faker->image('public/storage', 640, 480, null, false),
            'price' => $this->faker->numberBetween(100,1000),
        ];
    }
}
