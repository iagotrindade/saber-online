<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Seeder;
use Illuminate\support\Facades\DB;
use Illuminate\Support\Str;
use App\Models\User;
use App\Models\Image;

class AdminUserSeed extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            'name' => 'Iago Silva',
            'image_id' => 1,
            'permission_id' => 1,
            'phone' => '51991657516',
            'status' => 'Ativo',
            'email' => 'iago23st1@gmail.com',
            'email_verified_at' => now(),
            'password' => Hash::make('12345678'),
            'remember_token' => Str::random(10),
        ]);
    }
}
