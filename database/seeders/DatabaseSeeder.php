<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Image;
use App\Models\Course;
use App\Models\CoursesModules;
use App\Models\Lesson;
use App\Models\Archive;
use App\Models\Certificate;
use App\Models\Doubt;
use App\Models\Note;
use App\Models\Topic;
use App\Models\TopicComments;
use App\Models\UserCourses;
use App\Models\AssistedLessons;
use App\Models\PermissionLinks;
use App\Models\LessionedCourses;
use App\Models\Update;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            PermissionGroupsSeeder::class
        ]);

        $this->call([
            PermissionItemsSeeder::class
        ]);

        PermissionLinks::factory(10)->create();

        Image::factory(50)->create();
        User::factory(50)->create();
        Course::factory(10)->create();
        CoursesModules::factory(90)->create();
        Lesson::factory(800)->create();
        Archive::factory(150)->create();
        Certificate::factory(30)->create();
        Doubt::factory(135)->create();
        Note::factory(150)->create();
        Topic::factory(110)->create();
        TopicComments::factory(330)->create();
        UserCourses::factory(150)->create();
        LessionedCourses::factory(15)->create();
        AssistedLessons::factory(900)->create();
        Update::factory(30)->create();
        $this->call([
            AdminUserSeed::class
        ]);


        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
