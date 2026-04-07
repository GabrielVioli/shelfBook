<?php

namespace Database\Factories;

use App\Models\Model;
use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\genre;
/**
 * @extends Factory<Model>
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
            'title'    => $this->faker->sentence(3),
            'author'   => $this->faker->name(),
            'pages'    => $this->faker->numberBetween(50, 1000),
            'status'   => $this->faker->randomElement(['to_read', 'reading', 'finished', 'default_to_read']),
            'rating'   => $this->faker->optional()->numberBetween(0, 5),
            'genre_id' => Genre::factory(),

        ];
    }
}
