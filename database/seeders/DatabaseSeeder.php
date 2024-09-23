<?php

namespace Database\Seeders;

use App\Models\Product;
use Database\Factories\PreOrderFactory;
use Illuminate\Database\Seeder;
use Peyas\PreOrderForm\Models\PreOrder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {

//        $this->call([
//            PermissionSeeder::class,
//            RoleSeeder::class,
//            UserSeeder::class,
//            UserRoleAssign::class,
//        ]);
//        Product::factory(10)->create();
        dd(PreOrderFactory::new()->create());
    }
}
