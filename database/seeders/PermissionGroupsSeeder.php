<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\support\Facades\DB;
use Illuminate\Database\Seeder;
use App\Models\PermissionGroups;

class PermissionGroupsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('permission_groups')->insert([
            'name' => 'Administrador',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('permission_groups')->insert([
            'name' => 'Professor',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('permission_groups')->insert([
            'name' => 'Suporte',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('permission_groups')->insert([
            'name' => 'Aluno',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
