<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Penyewa extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'tenant_id',
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
        'status',
        'created_by',
        'edited_by',
    ];
}
