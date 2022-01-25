<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Candidat extends Model
{
    use HasFactory;

    protected $fillable = [
        'FirstName',
        'MiddleName',
        'LastName',
        'email',
        'state',
        'city',
        'date',
        'phone',
        'img'
    ];
}
