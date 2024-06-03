<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('roles')->insert([
            [
                'name' => 'Admin',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'User',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Travel Agent',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
