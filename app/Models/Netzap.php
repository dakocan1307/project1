<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Netzap extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'tenant_id',
        'pppoe',
        'pass_pppoe',
        'ip_public',
        'gateway',
        'subnetmask',
        'dns1',
        'dns2',
        'paket_netzap',
        'harga_paket_netzap',
        'income_fix_netzap',
        'status',
        'created_by',
        'edited_by',
    ];
}
