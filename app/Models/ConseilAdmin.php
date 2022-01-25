<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ConseilAdmin extends Model
{
    use HasFactory;

    protected $fillable = [
        'prenom',
        'nom',
        'about',
        'organisation',
        'position',
        'email',
        'phone',
        'image',
        'type',
        'pays'
    ];
}
