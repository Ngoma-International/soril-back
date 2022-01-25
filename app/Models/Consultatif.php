<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Consultatif extends Model
{
    use HasFactory;

    protected $fillable = [
        'prenom',
        'nom',
        'organisation',
        'position',
        'email',
        'phone',
        'type',
        'about',
        'image'
    ];
}
