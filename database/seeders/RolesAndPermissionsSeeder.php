<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RolesAndPermissionsSeeder extends Seeder
{
    public function run()
    {
        // Reset cache
        app()[\Spatie\Permission\PermissionRegistrar::class]->forgetCachedPermissions();

        // PERMISOS
        Permission::create(['name' => 'view']);
        Permission::create(['name' => 'create']);
        Permission::create(['name' => 'edit']);
        Permission::create(['name' => 'delete']);

        // ROLES
        $admin = Role::create(['name' => 'admin']);
        $marketing = Role::create(['name' => 'marketing']);
        $manager = Role::create(['name' => 'manager']);
        $viewer = Role::create(['name' => 'viewer']);

        // ASIGNAR PERMISOS

        // Admin → TODO
        $admin->givePermissionTo(Permission::all());

        // Marketing → crear + editar
        $marketing->givePermissionTo(['view', 'create', 'edit']);

        // Manager → ver + editar
        $manager->givePermissionTo(['view', 'edit']);

        // Viewer → solo lectura
        $viewer->givePermissionTo(['view']);
    }
}
