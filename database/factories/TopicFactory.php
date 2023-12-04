<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\User;
use App\Models\Course;
use App\Models\Lesson;


/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Topic>
 */
class TopicFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => fake()->name(),
            'body' => fake()->sentence(),
            'user_id' => User::all()->random(),
            'lesson_id' => Lesson::all()->random(),
            'course_id' => Course::all()->random(),
        ];
    }
}
