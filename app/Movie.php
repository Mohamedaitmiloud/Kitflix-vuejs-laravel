<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    public function genres(){
        return $this->belongsToMany('App\Genre');
    }

    public function torrents(){
        return $this->hasMany('App\Torrent');
    }
}
