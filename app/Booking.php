<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    protected $fillable=['name','email','contact_number','pickup_location','drop_location','pickup_date'];
}
