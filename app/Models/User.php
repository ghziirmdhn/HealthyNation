<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use HasFactory;

    // Kolom yang bisa diisi melalui form
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    // Kolom yang harus disembunyikan
    protected $hidden = [
        'password',
        'remember_token',
    ];
}
