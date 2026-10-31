<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        // Akun Pengguna LMS (1 Dosen & 1 Mahasiswa)
        // TODO 1 : Buat akun awal untuk Dosen.
        // Hint:
        // - Gunakan email sebagai identitas akun.
        // - Lengkapi nama, password yang di-hash, role Dosen,dan nomor induk.
       User::create([
            'name' => 'Dr. Ir. Budi Santoso, M.T.',
            'email' => 'budi@telkom.univ',
            'password' => Hash::make('password'),
            'role' => 'dosen',
       ]);
       User::create([
            'name' => 'Ahmad Raihan Arifinza',
            'email' => 'raihan@student.telkomuniversity.ac.id',
            'password' => Hash::make('password'),
            'role' => 'mahasiswa',
       ]);
       
        // User::updateOrCreate(
        //     [?],
        // );
    }
}
