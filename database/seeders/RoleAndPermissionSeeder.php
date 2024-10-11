<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class RoleAndPermissionSeeder extends Seeder
{
    public function run()
    {
        // Reset cached roles and permissions
        app()[\Spatie\Permission\PermissionRegistrar::class]->forgetCachedPermissions();

        // Permission
        Permission::create(['name' => 'assign-roles']);
        Permission::create(['name' => 'edit-users']);
        Permission::create(['name' => 'delete-users']);
        Permission::create(['name' => 'create-event']);
        Permission::create(['name' => 'edit-event']);
        Permission::create(['name' => 'delete-event']);

        // Role
        $adminRole = Role::create(['name' => 'Admin']);
        $organizer = Role::create(['name' => 'Veranstalter']);
        Role::create(['name' => 'Besucher']);
        $superAdmin = Role::create(['name' => 'Super-Admin']);

        $adminRole->givePermissionTo([
            'assign-roles',
            'edit-users',
            'delete-users',

            'create-event',
            'edit-event',
            'delete-event',
        ]);

        $organizer->givePermissionTo([
            'create-event',
            'edit-event',
            'delete-event',
        ]);
    }
}
