<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Petani;
use App\Models\Kebun;
use App\Models\HargaTbs;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        // 1. Akun Admin
        User::create([
            'name' => 'Admin SawitMentor',
            'email' => 'admin@gmail.com',
            'password' => Hash::make('password123'),
            'role' => 'admin',
        ]);

        // 2. Data Petani Dummy
        $petani = Petani::create([
            'nama' => 'Budi Santoso',
            'alamat' => 'Jl. Sawit Raya No. 12',
            'no_hp' => '081234567890',
        ]);

        // 3. Akun User Petani
        User::create([
            'name' => 'Budi Santoso',
            'email' => 'budi@gmail.com',
            'password' => Hash::make('password123'),
            'role' => 'petani',
            'petani_id' => $petani->id,
        ]);

        // 4. Data Lahan Kebun Dummy
        Kebun::create([
            'petani_id' => $petani->id,
            'nama_kebun' => 'Kebun Sawit Sejahtera',
            'lokasi' => 'Blok A2',
            'luas_lahan' => 2.50,
        ]);

        // 5. Data Harga TBS Awal
        HargaTbs::create([
            'periode_mulai' => now()->startOfMonth(),
            'periode_selesai' => now()->endOfMonth(),
            'harga_per_kg' => 2500,
        ]);
    }
}