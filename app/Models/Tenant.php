<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Tenant extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'unit',
        'nama',
        'nomor_ktp',
        'telp1',
        'telp2',
        'email1',
        'email2',
        'alamat',
        'apartment',
        'komplek',
        'tower',
        'status_hunian',
        'created_by',
        'edited_by',
        'no_inet_basic',
        'no_telp1_basic',
        'no_telp2_basic',
        'pass_stb_basic',
        'sn_ont_basic',
        'sn_stb_basic',
        'no_inet_upgrade',
        'no_telp1_upgrade',
        'no_telp2_upgrade',
        'pass_stb_upgrade',
        'sn_ont_upgrade',
        'sn_stb_upgrade',
        'paket_upgrade',
        'pppoe',
        'pass_pppoe',
        'ip_public',
        'gateway',
        'subnetmask',
        'dns1',
        'dns2',
        'paket_netzap',
    ];
}
