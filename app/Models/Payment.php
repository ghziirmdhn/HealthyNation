<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    use HasFactory;

    protected $fillable = [
        'first_name',
        'last_name',
        'location',
        'email',
        'method',
        'plan',
        'amount',
        'status',
    ];
}
