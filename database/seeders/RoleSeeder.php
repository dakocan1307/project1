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
        $admin->givePermissionTo(['admin','create_tenant','edit_tenant','delete_tenant','create_tiket','edit_tiket','delete_tiket']);

        $manager = Role::create([
            'name'          =>  'manager',
            'guard_name'    =>  'web',
        ]);
        $manager->givePermissionTo(['manager','create_tenant','edit_tenant','delete_tenant','create_tiket','edit_tiket','delete_tiket']);

        $spv = Role::create([
            'name'          =>  'spv',
            'guard_name'    =>  'web',
        ]);
        $spv->givePermissionTo(['spv','create_tenant','edit_tenant','delete_tenant','create_tiket','edit_tiket','delete_tiket']);

        $cs_leader = Role::create([
            'name'          =>  'cs_leader',
            'guard_name'    =>  'web',
        ]);
        $cs_leader->givePermissionTo(['cs_leader','create_tenant','edit_tenant','delete_tenant','create_tiket','edit_tiket','delete_tiket']);

        $cs_staff = Role::create([
            'name'          =>  'cs_staff',
            'guard_name'    =>  'web',
        ]);
        $cs_staff->givePermissionTo(['cs_staff','create_tenant','edit_tenant','create_tiket','edit_tiket']);

        $ts_leader = Role::create([
            'name'          =>  'ts_leader',
            'guard_name'    =>  'web',
        ]);
        $ts_leader->givePermissionTo(['ts_leader','create_tiket']);

        $ts_staff = Role::create([
            'name'          =>  'ts_staff',
            'guard_name'    =>  'web',
        ]);
        $ts_staff->givePermissionTo(['ts_staff']);
    }
}
