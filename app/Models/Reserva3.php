<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reserva3 extends Model
{
    use HasFactory;

    protected $table = 'reservas3';
    protected $fillable = ['nombre', 'fecha_hora'];
}
