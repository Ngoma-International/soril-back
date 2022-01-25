<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use HasFactory;

    protected $fillable = [
      'firstName',
      'lastName',
      'type',
      'title',
      'country',
      'phone',
      'organisation',
      'position',
      'email',
      'note',
      'manuscrit'
    ];
}
