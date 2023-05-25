<?php

namespace Database\Factories;

use App\Models\Book;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\BooksBorrowed>
 */
class BooksBorrowedFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $date = $this->faker->dateTimeThisYear();
        return [
            'book_id' => $this->faker->randomElement(Book::pluck('book_id')),
            'user_id' => $this->faker->randomElement(User::pluck('user_id')),
            'borrowed_on' => $date,
            'returned_on' => $this->faker->dateTimeInInterval($date,'+'.rand(1,10).' days'),
        ];
    }
}
