<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class VehicleCategory extends Model
{
    protected $fillable = ['name','description'];

    public function vehicles()
    {
        return $this->hasMany('App\Vehicle');
    }
}
