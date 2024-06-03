<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Disable foreign key checks
        Schema::disableForeignKeyConstraints();

        // Truncate all tables
        DB::table('users')->truncate();
        DB::table('roles')->truncate();
        DB::table('destinations')->truncate();
        DB::table('packages')->truncate();
        DB::table('bookings')->truncate();
        DB::table('reviews')->truncate();
        DB::table('payments')->truncate();

        // Enable foreign key checks
        Schema::enableForeignKeyConstraints();

        // Call individual seeders
        $this->call([
            RoleSeeder::class,
            UserSeeder::class,
            DestinationSeeder::class,
            PackageSeeder::class,
        ]);
    }
}
