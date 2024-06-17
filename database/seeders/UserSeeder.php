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
                'name' => 'Andi',
                'email' => 'andi@example.com',
                'password' => Hash::make('123'),
            ],
            [
                'name' => 'Budi',
                'email' => 'budi@example.com',
                'password' => Hash::make('1234'),
            ],
            [
                'name' => 'Calton',
                'email' => 'calton@example.com',
                'password' => Hash::make('oke'),
            ],
        ]);
    }
}
