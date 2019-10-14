<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Playlist extends Model
{
    public function song()
    {
        return $this->belongsToMany('App\Song','playlist_songs');
    }

    public function user()
    {
        return $this->belongsTo('App/User');
    }
}
