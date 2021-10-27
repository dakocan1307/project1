<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class IndihomeBasic extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'tenant_id',
        'no_inet_basic',
        'no_telp1_basic',
        'no_telp2_basic',
        'pass_stb_basic',
        'sn_ont_basic',
        'sn_stb_basic',
        'payment_basic',
        'status',
        'status_payment',
        'created_by',
        'edited_by',
    ];
}
