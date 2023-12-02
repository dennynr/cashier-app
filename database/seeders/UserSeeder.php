<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Buat data dummy untuk tabel users

        DB::table('users')->insert([
            'name' => 'dennydaffa',
            'email' => 'dennydaffa@admin.com',
            'email_verified_at' => now(),
            'password' => Hash::make('denny123'),
            'remember_token' => null,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        // Tambahkan data dummy lainnya sesuai kebutuhan
    }
}
