<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reserva2 extends Model
{
    use HasFactory;

    protected $table = 'reservas2';
    protected $fillable = ['nombre', 'fecha_hora'];
}
