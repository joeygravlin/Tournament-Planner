<?php

namespace App;

use Laravel\Passport\HasApiTokens;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token', 'email',
    ];

    //one to many
    public function createdTournaments(){
        return $this->hasMany('App\Tournament', 'creator', 'id');
    }

    //many to many
    public function tournaments()
    {
        return $this->belongsToMany('App\Tournament','users_tournaments');
    }

    /**https://files.slack.com/files-pri/T35B1JAET-F7SPLRLAJ/1.png
     * Get Tournaments this User is participating in.
     * (many to many)
     * @return Illuminate\Support\Collection App\Team
     */
    public function teams()
    {
        return $this->belongsToMany('App\Team','users_local_teams');
    }

    public function hasTeam($tid){
        return $this->teams()->where('tournament_id', $tid)->exists();
    }

    public function isInTournament($tid){
        return $this->tournaments()->where('id', $tid)->exists();
    }
}
