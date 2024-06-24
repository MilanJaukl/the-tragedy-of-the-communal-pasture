<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class RolePermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $permissions = ['create-game', 'start-game', 'end-game', 'delete-game', 'view-admin'];
        foreach ($permissions as $permission) {
            Permission::create(['name' => $permission]);
        }
    }
}
