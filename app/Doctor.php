<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Doctor extends Model
{
    public function clinics()
    {
        return $this->belongsToMany('App\Clinic');
    }
}
