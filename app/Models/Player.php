<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Player extends Model
{
    use HasFactory;

    protected $fillable = [
        'nombre',
        'edad',
        'pais',
        'recordPts',
        'horasJugadas',
    ];

    protected $hidden = [
        'created_at',
        'updated_at',
    ];
}
