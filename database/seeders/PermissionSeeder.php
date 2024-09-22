<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Artisan;
use Spatie\Permission\Models\Permission;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Artisan::call("config:clear");
        Artisan::call("cache:clear");
        Artisan::call("permission:cache-reset");
        $features = config('features');
        foreach ($features as $feature) {
            foreach ($feature['actions'] as $action) {
                Permission::findOrCreate($action, 'api');
            }
        }

    }
}
