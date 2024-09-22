<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Role;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'name' => 'Admin User',
                'email' => 'admin@admin.com',
                'email_verified_at' => now(),
                'password' => Hash::make('12345678'),
            ],
            [
                'name' => 'Manager User',
                'email' => 'manager@manager.com',
                'email_verified_at' => now(),
                'password' => Hash::make('12345678'),
            ],
        ];

        foreach ($data as $userData) {
            User::create($userData);
        }
    }
}
