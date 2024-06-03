<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        Artisan::call('migrate:refresh');
        // Call individual seeders
        $this->call([
            RoleSeeder::class,
            UserSeeder::class,
            DestinationSeeder::class,
            PackageSeeder::class,
        ]);
    }
}
