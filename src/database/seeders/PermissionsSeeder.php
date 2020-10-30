<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;
use Spatie\Permission\PermissionRegistrar;

class PermissionsSeeder extends Seeder
{
    /**
     * Create the initial roles and permissions.
     *
     * @return void
     */
    public function run()
    {
        // Reset cached roles and permissions
        app()[PermissionRegistrar::class]->forgetCachedPermissions();

        // create permissions
        Permission::create(['name' => 'download publication']);
        Permission::create(['name' => 'upload publication']);
        Permission::create(['name' => 'administrate']);

        // create roles and assign existing permissions
        $role_user = Role::create(['name' => 'user-default']);
        $role_user->givePermissionTo('download publication');
        
        $role_teacher = Role::create(['name' => 'user-teacher']);
        $role_teacher->givePermissionTo('download publication');
        $role_teacher->givePermissionTo('upload publication');

        $superadmin = Role::create(['name' => 'super-admin']);
        $superadmin->givePermissionTo('administrate');
        // + gets all permissions via Gate::before rule; see AuthServiceProvider
    }
}
