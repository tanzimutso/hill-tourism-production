<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vehicle extends Model
{
    protected $table = "vehicles";
    protected $fillable = ['vehicle_type','vehicle_type_id','vehicle_serial_no',
        'vehicle_reg_no','seat_capacity','status'];
}
