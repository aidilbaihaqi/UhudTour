<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Admin
        \App\Models\User::create([
            'name' => 'Admin UTour',
            'email' => 'admin@gmail.com',
            'password' => Hash::make('admin123')
        ]);

        // Paket Umrah
        \App\Models\Umrah::create([
            'kode_paket' => 'UMR000B1',
            'nama_paket' => '15 Juli 2023 | Bronze',
            'jenis_paket' => 'Bronze',
            'hotel_mekkah' => 'Jabal Omar Marriot Hotel',
            'hotel_madinah' => 'Leader Al Muna Karim',
            'program_hari' => 9,
            'bandara_keberangkatan' => 'Soekarno-Hatta International Airport (CGK)',
            'keberangkatan' => '2023-07-15',
            'kamar' => 'Reguler',
            'harga' => 30000000
        ]);

        // Paket Haji
        \App\Models\Haji::create([
            'kode_paket' => 'HAJI000C1',
            'nama_paket' => '29 Juni 2023 | Bronze',
            'jenis_paket' => 'Bronze',
            'hotel_mekkah' => 'Jabal Omar Marriot Hotel',
            'hotel_madinah' => 'Leader Al Muna Karim',
            'arafah' => 'Maktab 72',
            'aziziyah' => 'Apartemen',
            'mabit' => 'Tenda AC',
            'program_hari' => 9,
            'bandara_keberangkatan' => 'Soekarno-Hatta International Airport (CGK)',
            'keberangkatan' => '2023-06-29',
            'tahun_keberangkatan' => '2023/2024',
            'kamar' => 'Reguler',
            'harga' => 50000000
        ]);
    }
}
