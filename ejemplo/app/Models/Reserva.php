<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Reserva extends Model
{
    protected $table = 'reservas';

    protected $fillable = [
        'nombre_cliente',
        'telefono',
        'mesa',
        'fecha_reserva',
        'hora_reserva',
        'cantidad_personas',
    ];
}
