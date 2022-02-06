<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Author extends Model
{
    use HasFactory;

    protected $fillable = [
      'firstName',
      'lastName',
      'middleName',
      'email',
      'country',
      'city',
      'date',
      'state',
      'companyName',
      'department',
      'position',
      'image',
      'status',
        'password'
    ];
}
