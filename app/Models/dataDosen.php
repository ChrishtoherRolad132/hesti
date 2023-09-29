<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class dataDosen extends Model
{
    use HasFactory;
    protected $fillable = [
        'nip',
        'nama',
        'jabatan',
        'unit_kerja',
        'k1',
        'k2',
        'k3',
        'k4',
        'k5',
        'k6',
        'k7',
    ];
}
