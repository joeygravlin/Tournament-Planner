<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Guest extends Model
{
    //many to one
    public function team(){
        return $this->belongsTo('App\Team');
    }
}
