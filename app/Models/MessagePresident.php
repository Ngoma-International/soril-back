<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MessagePresident extends Model
{
    use HasFactory;

    protected $fillable = [
        'prenom',
        'nom',
        'date',
        'introduction',
        'about',
        'message',
        'titreAuteur',
        'titreMessage',
        'image'
    ];
}
