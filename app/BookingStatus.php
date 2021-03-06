<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BookingStatus extends Model
{
    protected $fillable = ['status','description'];

    public function bookings()
    {
        return $this->hasMany('App\Booking');
    }
}
