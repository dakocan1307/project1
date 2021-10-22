<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin = User::create([
            'name'      =>  'Administrator',
            'email'     =>  'admin@kretek.dev',
            'password'  =>  bcrypt('password')
        ]);
        $admin->assignRole('admin');

        $manager = User::create([
            'name'      =>  'Manager',
            'email'     =>  'manager@kretek.dev',
            'password'  =>  bcrypt('password')
        ]);
        $manager->assignRole('manager');

        $spv = User::create([
            'name'      =>  'Supervisor',
            'email'     =>  'spv@kretek.dev',
            'password'  =>  bcrypt('password')
        ]);
        $spv->assignRole('spv');

        $cs_leader = User::create([
            'name'      =>  'Leader CS',
            'email'     =>  'cs_leader@kretek.dev',
            'password'  =>  bcrypt('password')
        ]);
        $cs_leader->assignRole('cs_leader');

        $cs_staff = User::create([
            'name'      =>  'Staff CS',
            'email'     =>  'cs_staff@kretek.dev',
            'password'  =>  bcrypt('password')
        ]);
        $cs_staff->assignRole('cs_staff');

        $ts_leader = User::create([
            'name'      =>  'Leader TS',
            'email'     =>  'ts_leader@kretek.dev',
            'password'  =>  bcrypt('password')
        ]);
        $ts_leader->assignRole('ts_leader');

        $ts_staff = User::create([
            'name'      =>  'Staff TS',
            'email'     =>  'ts_staff@kretek.dev',
            'password'  =>  bcrypt('password')
        ]);
        $ts_staff->assignRole('ts_staff');
    }
}
