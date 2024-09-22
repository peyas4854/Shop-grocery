<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserRoleAssign extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $adminRole = \Spatie\Permission\Models\Role::query()->where('name', 'admin')->first();
        $adminUser = \App\Models\User::query()->find(1);
        $adminUser->assignRole($adminRole);

        $managerRole = \Spatie\Permission\Models\Role::query()->where('name', 'manager')->first();
        $managerUser = \App\Models\User::query()->find(2);
        $managerUser->assignRole($managerRole);
    }
}
