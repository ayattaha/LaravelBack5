<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Faker\Generator as Faker;

class City extends Model
{
    use HasFactory;

    protected $fillable=[
        'city',
    ];
//task 11
//     public function client()
// {
//     return $this->hasOne(Client::class);
// }
}
