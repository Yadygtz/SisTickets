<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ticket extends Model
{
    use HasFactory;

    // Agrega esta propiedad
    protected $fillable = [
        'title',
        'description',
        'observaciones',
        'user_id',
        'id_personal',
        'id_servicio',
        'id_area',
        'fecha_registro',
        'fecha_aprox',
        'fecha_termino',
        'estatus',
        'prioridad',
        'solicita',
        'origen'
    ];
}
