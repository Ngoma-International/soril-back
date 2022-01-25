<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserData extends Model
{
    use HasFactory;
    protected $fillable = [
        'image',
        'user_id',
        'phone',
        'about'
    ];

    public function user()
    {
        return $this->hasOne(User::class);
    }
}
