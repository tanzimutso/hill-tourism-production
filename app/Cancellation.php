<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cancellation extends Model
{
    protected $table = "cancellations";
    protected $fillable = ['token'];
}
