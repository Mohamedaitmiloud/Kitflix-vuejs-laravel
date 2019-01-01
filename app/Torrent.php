<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Torrent extends Model
{
    public function movies(){
        return $this->belongsTo('App\Movie');
    }
}
