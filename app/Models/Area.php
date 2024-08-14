<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Area extends Model
{
    use HasFactory;

    protected $primaryKey = 'id_area'; // Specify the primary key if it's not 'id'

    protected $fillable = [
        'area',
        'siglas',
    ];
}
