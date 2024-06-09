<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $fillable=[
        'name',
        'description',
        'price',
        'stock',

    ];
    // task 11
    public function client()
    {
        return $this->belongsToMany(Client::class);
    }

    // task 11
//     public function clients()
// {
//     return $this->hasMany(Client::class);
// }
}
