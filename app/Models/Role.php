<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    use HasFactory;

    public function getRoleLabelAttribute()
    {
        if (isset($this->attributes['name']) && $this->attributes['name']) {
            switch ($this->attributes['name']) {
                case 'kamus':
                    return "Kepala Museum";
            }
        }
        return 'Kepala Museum';
    }
}
