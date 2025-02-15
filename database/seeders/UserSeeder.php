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
                'name' => 'Admin User',
                'username' => 'admin123',
                'email' => 'admin@example.com',
                'email_verified_at' => now(),
                'password' => Hash::make('password123'), // Pastikan password di-hash
                'level' => 'admin',
                'remember_token' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Regular User',
                'username' => 'user123',
                'email' => 'user@example.com',
                'email_verified_at' => now(),
                'password' => Hash::make('password123'),
                'level' => 'user',
                'remember_token' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ]
        ]);
    }
}
