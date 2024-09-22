<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $roles = [
            [
                "name" => "admin",
                "guard_name" => "api"
            ],
            [
                "name" => "manager",
                "guard_name" => "api"
            ]
        ];

       $adminPermission = Permission::all()->pluck('name')->toArray();

       $managerPermission = [
           'pre-order-list',
           'pre-order-show'
       ];


        foreach ($roles as $role) {
            $role = Role::query()->updateOrCreate($role);
            if($role->name == 'admin'){
                $role->givePermissionTo($adminPermission);
            }else{
                $role->givePermissionTo($managerPermission);
            }
        }
    }
}
