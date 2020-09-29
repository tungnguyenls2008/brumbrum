<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vehicle extends Model
{
protected $table='vehicles';
protected $fillable=['model','brand','production_year','total_km','price','last_rent'];
    //
}
