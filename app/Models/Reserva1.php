<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reserva1 extends Model
{
    use HasFactory;

    protected $table = 'reservas1';
    protected $fillable = ['nombre', 'fecha_hora'];
}
