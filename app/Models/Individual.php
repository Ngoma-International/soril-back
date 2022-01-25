<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Individual extends Model
{
    use HasFactory;

    protected $fillable = [
        'firstName',
        'lastName',
        'email',
        'date',
        'country',
        'city',
        'state',
        'companyName',
        'position',
        'industry',
        'phone',
        'file',
        'amount',
        'registrantType',
        'statut',
        'com1',
        'com1statut',
        'com2',
        'com2statut',
        'com3',
        'com3statut',
        'period',
        'dpcpoint'
    ];
}
