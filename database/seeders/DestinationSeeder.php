<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DestinationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('destinations')->insert([
            [
                'name' => 'Bali',
                'description' => 'Pulau Dewata dengan pantai yang indah dan budaya yang kaya.',
                'location' => 'Indonesia',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Yogyakarta',
                'description' => 'Kota budaya dengan Candi Borobudur dan Keraton Yogyakarta.',
                'location' => 'Indonesia',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Lombok',
                'description' => 'Pulau dengan pantai yang eksotis dan Gunung Rinjani yang megah.',
                'location' => 'Indonesia',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Raja Ampat',
                'description' => 'Kepulauan dengan keindahan bawah laut yang menakjubkan.',
                'location' => 'Indonesia',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Jakarta',
                'description' => 'Ibu kota Indonesia dengan berbagai destinasi wisata modern.',
                'location' => 'Indonesia',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
