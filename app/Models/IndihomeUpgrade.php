<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class IndihomeUpgrade extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'tenant_id',
        'no_inet_upgrade',
        'no_telp1_upgrade',
        'no_telp2_upgrade',
        'pass_stb_upgrade',
        'sn_ont_upgrade',
        'sn_stb_upgrade',
        'paket_upgrade',
        'harga_paket_indihome',
        'income_fix_indihome',
        'status',
        'created_by',
        'edited_by',
    ];
}
