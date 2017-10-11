<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    protected $table = 'local_teams';

    //one to many
    public function guests(){
        return $this->hasMany('App\Guest');
    }

    //one to many
    public function brackets(){
        return $this->hasMany('App\Bracket');
    }

    //many to one
    public function tournament(){
        return $this->belongsTo('App\Tournament');
    }

    //many to many
    public function users(){
        return $this->belongsToMany('App\User', 'users_local_teams');
    }
}
