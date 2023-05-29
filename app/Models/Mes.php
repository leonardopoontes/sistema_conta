<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mes extends Model
{
    use HasFactory;

    public function debitos()
    {
        return $this->hasMany(Debito::class, 'mes_id');
    }

    public function ganhos()
    {
        return $this->hasMany(Ganho::class);
    }
}
