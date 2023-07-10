<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Disposisi extends Model
{
    use HasFactory;

    public function suratmasuk()
    {
        return $this->belongsTo(SuratMasuk::class,'suratmasuk_id','id');
    }

    public function diteruskan(){
        return $this->belongsTo(DivisiMuseum::class, 'tembusan_ke');
    }
}
