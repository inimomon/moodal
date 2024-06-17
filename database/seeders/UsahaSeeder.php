<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsahaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('usaha')->insert([
            [
                'user_id' => 1,
                'judul_usaha' => 'Kopi Kenangan',
                'deskripsi_usaha' => 'Kopi Kenangan merupakan kopi yang sangat enak dengan perpaduan coklat yang menarik.',
                'target_biaya' => 10000000,
                'biaya' => 5000000,
                'jaminan' => 50,
                'tenggat' => '2024-12-31',
                'pemodal' => json_encode([2, 3]),
                'jumlah_modal' => json_encode([2500000, 2500000]),
            ],
            [
                'user_id' => 2,
                'judul_usaha' => 'Juragan Boy',
                'deskripsi_usaha' => 'Juragan boy aplikasi untuk cari pegawai.',
                'target_biaya' => 8000000,
                'biaya' => 5000000,
                'jaminan' => 25,
                'tenggat' => '2024-10-31',
                'pemodal' => json_encode([1]),
                'jumlah_modal' => json_encode([5000000]),
            ],
        ]);
    }
}
