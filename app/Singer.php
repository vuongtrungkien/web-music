<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Singer extends Model
{
    public function song()
    {
        return $this->hasMany('App\Song');
    }

    public function video()
    {
        return $this->hasMany('App\Video');
    }

}
