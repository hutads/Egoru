<?php

namespace Database\Factories;

use App\Models\Game;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Game>
 */
class GameFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = Game::class;
    public function definition(): array
    {
        return [
            'is_playing' => 0,
            'title' => $this ->faker->word,
            'image' => $this->faker->imageUrl(),
        ];
    }
}
