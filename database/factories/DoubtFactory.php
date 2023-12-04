<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\User;
use App\Models\Lesson;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Doubt>
 */
class DoubtFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'category' => fake()->name(),
            'message' => fake()->sentence(),
            'user_id' => User::all()->random(),
            'lesson_id' => Lesson::all()->random(),
            'response_person_id' => User::all()->random(),
            'status' => 'Respondido',
        ];
    }
}
