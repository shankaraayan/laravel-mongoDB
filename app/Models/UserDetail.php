<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserDetail extends Model
{
    use HasFactory;

    protected $fillable = [
        'userId',
        'pic',
        'gender',
        'address',
        'city',
        'longLatitude',
        'pincode',
    ];
}
