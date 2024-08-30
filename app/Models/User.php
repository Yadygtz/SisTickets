<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'titulo',
        'nombre',
        'nombre_p_mostrar',
        'curp',
        'ced_pro',
        'tit_pro',
        'departamento',
        'depto',
        'siglas',
        'puesto',
        'clave',
        'activo',
        'cambiar_passw',
        'contrasenia',
        'tipo',
        'centro',
        'ultima_permanencia'
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'contrasenia',
    ];

    public function getInitialsAttribute()
    {
        $tokens = explode(" ", $this->nombre_p_mostrar);
        $initials =  $tokens[0][0];
        if (count($tokens) > 1) {
            $initials = $initials . $tokens[1][0];
        }
        return $initials;
    }
}
