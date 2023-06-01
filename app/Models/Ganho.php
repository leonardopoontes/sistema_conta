<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ganho extends Model
{
    use HasFactory;

    protected $fillable = [
        'fonte',
        'ganho',
        'data',
        'month_id',
        'user_id'
    ];

    public function month()
    {
        return $this->belongsTo(Month::class, 'month_id');
    }
    public function user()
    {
        return $this->belongsTo(User::class);
    }

}
