<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SuratMasuk extends Model
{
    use HasFactory;

    public function getStatusSuratMasukAttribute()
    {
        if (isset($this->attributes['status']) && $this->attributes['status']) {
            switch ($this->attributes['status']) {
                case 'diterima':
                    return "badge-success";
                case 'ditolak':
                    return "badge-danger";
                case 'baru':
                    return "badge-primary";
                case 'ditakahkan':
                    return "badge-secondary";
            }
        }
        return 'badge-secondary';
    }
}
