<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    protected $table = "bookings";
    protected $fillable = ['vehicle_type_id','token','travelling_from','travelling_to',
        'customer_name','customer_email','customer_contact_no','booking_date','transaction_no',
        'payment_status'];
}
