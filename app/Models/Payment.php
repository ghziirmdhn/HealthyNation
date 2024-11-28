<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    protected $fillable = [
        'first_name',
        'last_name',
        'email',
        'location',
        'amount',
        'method',
        'plan',
        'status'
    ];
}