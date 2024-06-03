<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PackageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('packages')->insert([
            [
                'name' => 'Bali Beach Holiday',
                'description' => 'Nikmati liburan di pantai-pantai indah Bali selama 5 hari 4 malam.',
                'price' => 5000000.00,
                'destination_id' => 1, // Pastikan ID ini sesuai dengan ID di tabel destinations
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Yogyakarta Cultural Tour',
                'description' => 'Jelajahi budaya Yogyakarta dan kunjungi Candi Borobudur selama 3 hari 2 malam.',
                'price' => 3000000.00,
                'destination_id' => 2, // Pastikan ID ini sesuai dengan ID di tabel destinations
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Lombok Adventure',
                'description' => 'Petualangan seru di Lombok dengan mendaki Gunung Rinjani selama 4 hari 3 malam.',
                'price' => 4500000.00,
                'destination_id' => 3, // Pastikan ID ini sesuai dengan ID di tabel destinations
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Raja Ampat Diving Experience',
                'description' => 'Pengalaman menyelam di Raja Ampat selama 7 hari 6 malam.',
                'price' => 10000000.00,
                'destination_id' => 4, // Pastikan ID ini sesuai dengan ID di tabel destinations
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Jakarta City Tour',
                'description' => 'Tur keliling kota Jakarta selama 2 hari 1 malam.',
                'price' => 1500000.00,
                'destination_id' => 5, // Pastikan ID ini sesuai dengan ID di tabel destinations
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
