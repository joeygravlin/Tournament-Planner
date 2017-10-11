<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bracket extends Model
{
    //many to one
    public function tournament(){
        return $this->belongsTo('App\Tournament');
    }

    //many to (n)one (there will be brackets with no matching team)
    public function team(){
        return $this->belongsTo('App\Team');
    }
}
