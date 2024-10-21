<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Personal extends Model
{
    use HasFactory;
    protected $table = 'personal';
    protected $fillable = [
        'id',
        'id_area',
        'nombre',
        'nombre_p_mostrar',
        'puesto'
    ];
}
