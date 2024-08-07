<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\PermissionRegistrar;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Reset cached roles and permissions
        app()[PermissionRegistrar::class]->forgetCachedPermissions();

        // create permissions
        Permission::create(['name' => 'comment articles']);
        Permission::create(['name' => 'update articles']);
        Permission::create(['name' => 'delete articles']);
        Permission::create(['name' => 'manage users']);

        // create roles and assign created permissions

        // this can be done as separate statements
        Role::create(['name' => 'user'])
            ->givePermissionTo('comment articles');

        // or may be done by chaining
        Role::create(['name' => 'moderator'])
            ->syncPermissions(['comment articles', 'update articles']);

        Role::create(['name' => 'admin'])
            ->syncPermissions(Permission::all());
    }
}
