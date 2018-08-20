<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Driver extends Model
{
    protected $table = "drivers";
    protected $fillable = ['name','contact_no','address','license_no',
        'vehicle_reg_no','NID_no','vehicle_type_no','driver_image','vehicle_image'];
}
