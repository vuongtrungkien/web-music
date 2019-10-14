<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Video extends Model
{
    public function singer()
    {
        return $this->belongsTo('App\Singer');
    }

    public function category()
    {
        return $this->belongsTo('App\Category');
    }
}
