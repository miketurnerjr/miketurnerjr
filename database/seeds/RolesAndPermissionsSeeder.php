<?php

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RolesAndPermissionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $roles = ['web', 'admin', 'superadmin', 'tester'];

        foreach($roles as $role) {
            Role::create([
                'name' => $role,
                'guard_name' => $role,
                'created_at' => now(),
                'updated_at' => now()
            ]);
        }

        
    }
}
