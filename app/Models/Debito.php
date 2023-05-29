<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Debito extends Model
{
    use HasFactory;

    protected $fillable = [
        'origem',
        'descricao',
        'valor',
        'vencimento',
        'month_id'
    ];

    public function month()
    {
        return $this->belongsTo(Month::class, 'month_id');
    }




}
