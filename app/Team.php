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

    /**
     * Get the users on this team.
     * (many to many)
     * @return Illuminate\Support\Collection App\User
     */
    public function users()
    {
        return $this->belongsToMany('App\User', 'users_local_teams');
    }

    /**
     * @param $userid
     * @return mixed
     */
    public function userAllowedToJoin($userid){
        //check if user has joined the tournament and is in no other team
        $user = User::findOrFail($userid);
        $tid = $this->tournament_id;
        return (!$user->hasTeam($tid) && $user->isInTournament($tid));
    }

    public function removeUser($uid){
        return $this->users()->detach($uid);
    }
}
