<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Juegos>
 */
class JuegosFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name' => Str::random(10),
            'price' => mt_rand(100000, 999999),
            'stock' => mt_rand(100000, 999999),
            'platform' => Str::random(10)
        ];
    }
}
