<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class NewsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'heading' => $this->faker->words(3, true),
            'description' => $this->faker->paragraph(2),
            'created_at' => $this->faker->dateTime('now', 'Europe/Moscow'),
            'updated_at' => $this->faker->dateTime('now', 'Europe/Moscow')
        ];

    }
}
