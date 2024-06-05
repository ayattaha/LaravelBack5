<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

use Faker\Generator as Faker;

class Client extends Model
{
    use HasFactory, SoftDeletes;
    protected $fillable=[
        'ClienName',
        'phone',
        'email',
        'website',
        'city',
        'active',
        'image'
    ];
}
