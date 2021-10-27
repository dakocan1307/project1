<?php

namespace Database\Seeders;

use App\Models\Tenant;
use Illuminate\Database\Seeder;

class TenantSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Tenant::create([
            'unit'              =>  'BG-01A1',
            'nama'              =>  'Tenant Tester 1',
            'nomor_ktp'         =>  '012345678911',
            'telp1'             =>  '085212345671',
            'telp2'             =>  '081212345671',
            'email1'            =>  'email1_1.tester.com',
            'email2'            =>  'email1_2.tester.com',
            'alamat'            =>  'jln. tester 1',
            'apartment'         =>  'The Mansion',
            'komplek'           =>  'Bougenville',
            'tower'             =>  'Gloria',
            'status_hunian'     =>  'aktif',
            'no_inet_basic'     =>  '121509201121',
            'no_telp1_basic'    =>  '02122601001',
            'pass_stb_basic'    =>  '79000001',
            'sn_ont_basic'      =>  'ZTEGC123ABC',
            'sn_stb_basic'      =>  'JA120000ACA001',
            'created_by'        =>  '1',
        ]);

        Tenant::create([
            'unit'              =>  'BG-02A1',
            'nama'              =>  'Tenant Tester 2',
            'nomor_ktp'         =>  '012345678912',
            'telp1'             =>  '085212345672',
            'telp2'             =>  '081212345672',
            'email1'            =>  'email2_1.tester.com',
            'email2'            =>  'email2_2.tester.com',
            'alamat'            =>  'jln. tester 2',
            'apartment'         =>  'The Mansion',
            'komplek'           =>  'Bougenville',
            'tower'             =>  'Gloria',
            'status_hunian'     =>  'aktif',
            'created_by'        =>  '1',
        ]);

        Tenant::create([
            'unit'              =>  'BG-03A1',
            'nama'              =>  'Tenant Tester 3',
            'nomor_ktp'         =>  '012345678913',
            'telp1'             =>  '085212345673',
            'telp2'             =>  '081212345673',
            'email1'            =>  'email3_1.tester.com',
            'email2'            =>  'email3_2.tester.com',
            'alamat'            =>  'jln. tester 3',
            'apartment'         =>  'The Mansion',
            'komplek'           =>  'Bougenville',
            'tower'             =>  'Gloria',
            'status_hunian'     =>  'aktif',
            'created_by'        =>  '1',
        ]);

        Tenant::create([
            'unit'              =>  'BG-04A1',
            'nama'              =>  'Tenant Tester 4',
            'nomor_ktp'         =>  '012345678914',
            'telp1'             =>  '085212345674',
            'telp2'             =>  '081212345674',
            'email1'            =>  'email4_1.tester.com',
            'email2'            =>  'email4_2.tester.com',
            'alamat'            =>  'jln. tester 4',
            'apartment'         =>  'The Mansion',
            'komplek'           =>  'Bougenville',
            'tower'             =>  'Gloria',
            'status_hunian'     =>  'aktif',
            'created_by'        =>  '1',
        ]);

        Tenant::create([
            'unit'              =>  'BG-05A1',
            'nama'              =>  'Tenant Tester 5',
            'nomor_ktp'         =>  '012345678915',
            'telp1'             =>  '085212345675',
            'telp2'             =>  '081212345675',
            'email1'            =>  'email5_1.tester.com',
            'email2'            =>  'email5_2.tester.com',
            'alamat'            =>  'jln. tester 5',
            'apartment'         =>  'The Mansion',
            'komplek'           =>  'Bougenville',
            'tower'             =>  'Gloria',
            'status_hunian'     =>  'aktif',
            'created_by'        =>  '1',
        ]);
    }
}
