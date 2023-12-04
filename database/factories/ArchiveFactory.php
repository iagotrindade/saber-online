<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Lesson;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Archive>
 */
class ArchiveFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $fileName = fake()->unique()->word . '.pdf';

        $pdfContent =fake()->text;

        Storage::disk('public')->put("lessons/archives/{$fileName}", $pdfContent);

        return [
            'name' => "lessons/archives/{$fileName}",
            'type' => pathinfo("lessons/archives/{$fileName}", PATHINFO_EXTENSION),
            'lesson_id' => Lesson::all()->random()
        ];
    }
}
