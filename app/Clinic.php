<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Clinic extends Model
{
    public function doctors()
    {
        return $this->belongsToMany('App\Doctor');
    }
}
