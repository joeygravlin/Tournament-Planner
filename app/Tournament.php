<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tournament extends Model
{
    //one to many
    public function brackets(){
        return $this->hasMany('App\Bracket');
    }

    //one to many
    public function teams(){
        return $this->hasMany('App\Team');
    }

    //many to one
    public function creator(){
        return $this->belongsTo('App\User', 'creator', 'id');
    }

    /**
     * Get the Users participating in this Tournament.
     * (many to many)
     * @return Illuminate\Support\Collection App\User
     */
    public function users()
    {
        return $this->belongsToMany('App\User', 'users_tournaments');
    }
}
