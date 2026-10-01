<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        User::create(['name' => 'Imam', 'email' => 'imam@example.com', 'password' => 'password123', 'role' => 'admin']);
        User::create(['name' => 'Budi', 'email' => 'budi@example.com', 'password' => 'password123', 'role' => 'mahasiswa']);
        User::create(['name' => 'Siti', 'email' => 'siti@example.com', 'password' => 'password123', 'role' => 'dosen']);
        User::create(['name' => 'Dummy', 'email' => 'dummy@example.com', 'password' => 'password123', 'role' => 'mahasiswa']);
    }
}
