<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EventProgramme extends Model
{
    use HasFactory;

    protected $fillable = [
        'date',
        'time',
        'facilitator',
        'header',
        'title',
        'evenement_id'
    ];

    public function event()
    {
        return $this->belongsTo(Evenement::class, 'evenement_id');
    }
}
