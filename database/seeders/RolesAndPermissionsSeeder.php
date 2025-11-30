<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RolesAndPermissionsSeeder extends Seeder
{
    public function run(): void
    {
        // Reset cache
        app()[\Spatie\Permission\PermissionRegistrar::class]->forgetCachedPermissions();

        // 1. Create Permissions
        $permissions = [
            'planets.view',
            'planets.create',
            'planets.edit',
            'planets.delete',

            'crew.view',
            'crew.create',
            'crew.edit',
            'crew.delete',

            'technologies.view',
            'technologies.create',
            'technologies.edit',
            'technologies.delete',
        ];

        foreach ($permissions as $permission) {
            Permission::firstOrCreate(['name' => $permission, 'guard_name' => 'web']);
        }

        // 2. Create Roles
        $admin = Role::firstOrCreate(['name' => 'Administrateur']);
        $managerPlanets = Role::firstOrCreate(['name' => 'Gestionnaire Planètes']);
        $managerCrew = Role::firstOrCreate(['name' => 'Gestionnaire Équipage']);
        $managerTechnologies = Role::firstOrCreate(['name' => 'Gestionnaire Technologies']);

        // 3. Assign Permissions to roles
        $admin->givePermissionTo(Permission::all());

        $managerPlanets->givePermissionTo([
            'planets.view',
            'planets.create',
            'planets.edit',
            'planets.delete',
        ]);

        $managerCrew->givePermissionTo([
            'crew.view',
            'crew.create',
            'crew.edit',
            'crew.delete',
        ]);

        $managerTechnologies->givePermissionTo([
            'technologies.view',
            'technologies.create',
            'technologies.edit',
            'technologies.delete',
        ]);
    }
}
