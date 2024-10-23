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
        'nombre',
        'paterno',
        'materno',
        'tipo',
        'puesto',
        'clave',
        'password',
        'remember_token',
        'id_area',
        'nombre_p_mostrar'
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
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
