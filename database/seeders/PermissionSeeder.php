<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Permission::create([
            'name' => 'admin',
            'guard_name' => 'web',
        ]);
        Permission::create([
            'name' => 'manager',
            'guard_name' => 'web',
        ]);
        Permission::create([
            'name' => 'spv',
            'guard_name' => 'web',
        ]);
        Permission::create([
            'name' => 'cs_leader',
            'guard_name' => 'web',
        ]);
        Permission::create([
            'name' => 'cs_staff',
            'guard_name' => 'web',
        ]);
        Permission::create([
            'name' => 'ts_leader',
            'guard_name' => 'web',
        ]);
        Permission::create([
            'name' => 'ts_staff',
            'guard_name' => 'web',
        ]);


        Permission::create([
            'name' => 'create_tenant',
            'guard_name' => 'web',
        ]);
        Permission::create([
            'name' => 'edit_tenant',
            'guard_name' => 'web',
        ]);
        Permission::create([
            'name' => 'delete_tenant',
            'guard_name' => 'web',
        ]);
    }
}
