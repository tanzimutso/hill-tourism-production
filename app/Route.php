<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Route extends Model
{
    protected $table = "routes";
    protected $fillable = ['travelling_from','travelling_to',
        'travelling_time','fare','service_charge','parking_fare'];
}
