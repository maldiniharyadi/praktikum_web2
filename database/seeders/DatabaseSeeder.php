<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'nama' => 'Admin Utama',
            'username' => 'redgrave',
            'password' => Hash::make('dante'),
            'role' => 'admin'
        ]);
        User::create([
            'nama' => 'Admin Kedua',
            'username' => 'admin',
            'password' => Hash::make('123'),
            'role' => 'admin'
        ]);
    }
}
