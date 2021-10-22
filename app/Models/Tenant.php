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
    ];
}
