<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use App\Models\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Crear usuario administrador si no existe
        if (!User::where('email', 'admin@admin.com')->exists()) {
            User::create([
                'name' => 'Admin',
                'email' => 'admin@admin.com',
                'email_verified_at' => now(),
                'password' => Hash::make('admin123'),
                'remember_token' => Str::random(10),
                'role' => 'admin',
            ]);
        }

        // Crear usuario alumno si no existe
        if (!User::where('email', 'ainhoa@gmail.com')->exists()) {
            User::create([
                'name' => 'Ainhoa',
                'email' => 'ainhoa@gmail.com',
                'email_verified_at' => now(),
                'password' => Hash::make('ainhoa123'),
                'remember_token' => Str::random(10),
                'role' => 'alumno',
            ]);
        }
    }
}


