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
        'status',
        'user_id'
    ];
}
