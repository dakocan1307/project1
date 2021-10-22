<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin = Role::create([
            'name'          =>  'admin',
            'guard_name'    =>  'web',
        ]);
        $admin->givePermissionTo(['admin','create_tenant','edit_tenant','delete_tenant']);

        $manager = Role::create([
            'name'          =>  'manager',
            'guard_name'    =>  'web',
        ]);
        $manager->givePermissionTo(['manager','create_tenant','edit_tenant','delete_tenant']);

        $spv = Role::create([
            'name'          =>  'spv',
            'guard_name'    =>  'web',
        ]);
        $spv->givePermissionTo(['spv','create_tenant','edit_tenant','delete_tenant']);

        $cs_leader = Role::create([
            'name'          =>  'cs_leader',
            'guard_name'    =>  'web',
        ]);
        $cs_leader->givePermissionTo(['cs_leader','create_tenant','edit_tenant','delete_tenant']);

        $cs_staff = Role::create([
            'name'          =>  'cs_staff',
            'guard_name'    =>  'web',
        ]);
        $cs_staff->givePermissionTo(['cs_staff','create_tenant','edit_tenant']);

        $ts_leader = Role::create([
            'name'          =>  'ts_leader',
            'guard_name'    =>  'web',
        ]);
        $ts_leader->givePermissionTo(['ts_leader']);

        $ts_staff = Role::create([
            'name'          =>  'ts_staff',
            'guard_name'    =>  'web',
        ]);
        $ts_staff->givePermissionTo(['ts_staff']);
    }
}
