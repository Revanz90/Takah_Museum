<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SuratMasuk extends Model
{
    use HasFactory;
    protected $table = 'surat_masuk';

    protected $fillable = [
        'id',
        'dari',
        'no_surat',
        'perihal',
        'keterangan',
        // 'status',
    ];
}
