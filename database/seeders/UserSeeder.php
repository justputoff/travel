<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            [
                'name' => 'Admin User',
                'email' => 'admin@example.com',
                'password' => Hash::make('password'),
                'role_id' => 1, // Pastikan ID ini sesuai dengan ID di tabel roles
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Regular User',
                'email' => 'user@example.com',
                'password' => Hash::make('password'),
                'role_id' => 2, // Pastikan ID ini sesuai dengan ID di tabel roles
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Travel Agent User',
                'email' => 'agent@example.com',
                'password' => Hash::make('password'),
                'role_id' => 3, // Pastikan ID ini sesuai dengan ID di tabel roles
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
