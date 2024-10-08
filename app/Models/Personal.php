<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Personal extends Model
{
    use HasFactory;
    protected $fillable = [
        'id_personal',
        'id_area',
        'nombre',
        'nombre_p_mostrar',
        'puesto'
    ];
}
