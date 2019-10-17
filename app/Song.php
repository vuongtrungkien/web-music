<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Song extends Model
{



    public function playlist()
    {
        return $this->belongsToMany('App\Playlist');
    }

    public function singer()
    {
        return $this->belongsTo('App\Singer');
    }

    public function category()
    {
        return $this->belongsTo('App\Category');
    }
}
