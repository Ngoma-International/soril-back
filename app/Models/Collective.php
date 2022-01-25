<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Collective extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'reg-no',
        'industry',
        'country',
        'position',
        'city',
        'province',
        'website',
        'firstName',
        'lastName',
        'email',
        'phone',
        'job-title',
        'representatives',
        'logo',
        'fFirstName',
        'fLastName',
        'fEmail',
        'fPhone',
        'fJob-title',
        'fullname',
        'positions',
        'statut'
    ];
}
