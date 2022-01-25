<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class managementSecretariate extends Model
{
    use HasFactory;

    protected $fillable = [
        'prenom',
        'nom',
        'type',
        'email',
        'phone',
        'image',
        'pays',
        'about',
        'password',
    ];
}
