<?php

namespace Database\Seeders;

use App\Models\IndihomeBasic;
use Illuminate\Database\Seeder;

class IndihomeBasicSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        IndihomeBasic::create([
            'tenant_id'         =>  '1',
            'no_inet_basic'     =>  '121509201121',
            'no_telp1_basic'    =>  '02122601001',
            'pass_stb_basic'    =>  '79000001',
            'sn_ont_basic'      =>  'ZTEGC123ABC',
            'sn_stb_basic'      =>  'JA120000ACA001',
            'payment_basic'     =>  '57500',
            'created_by'        =>  '1',
        ]);
    }
}
