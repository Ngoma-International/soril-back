<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Evenement extends Model
{
    use HasFactory;

    protected $fillable = [
        'typeEvent',
        'titre',
        'sousTitre',
        'lieu',
        'duree',
        'date',
        'animateur',
        'speaker',
        'ville',
        'apercu',
        'participer',
        'prerequis',
        'certification',
        'type',
        'prix',
        'description',
        'image',
    ];

    public function event()
    {
        return $this->hasOne(EventProgramme::class, 'evenement_id');
    }
}
