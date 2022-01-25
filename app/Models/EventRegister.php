<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EventRegister extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'name',
        'evenement_id',
        'email',
        'phone',
        'pays',
        'province',
        'company',
        'departement',
        'position',
        'industrie',
        'phoneBureau',
        'status',
        'ref'
    ];
}
