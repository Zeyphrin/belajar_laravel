<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Student>
 */
class StudentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nis' => fake()->randomNumber(5, true),
            'nama' => fake()->name(),
            'asal' => fake()->city(),
            'kelas_id' => fake()-> randomDigitNotNull(),
            'tgl_lahir' => fake()->dateTime(),
        ];
    }
}
