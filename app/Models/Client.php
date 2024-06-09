<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\City;
use Faker\Generator as Faker;

class Client extends Model
{
    use HasFactory, SoftDeletes;
    protected $fillable=[
        'ClienName',
        'phone',
        'email',
        'website',
        'city_id',
        'active',
        'image',
        'address',
    ];
    public function City(){
        return $this->belongsTo(City::class);
        }
    //task 11
        public function product()
        {
            return $this->belongsToMany(Product::class);
        }
        //task 11
        // public function product()
        // {
        //     return $this->hasMany(Product::class);
        // }
}
