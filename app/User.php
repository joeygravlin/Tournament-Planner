<?php

namespace App;

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
        'password', 'remember_token',
    ];

    /**
     * Get Tournaments this User has created.
     * (one to many)
     * @return Illuminate\Support\Collection App\Tournament
     */
    public function createdTournaments()
    {
        return $this->hasMany('App\Tournament', 'creator', 'id');
    }

    /**
     * Get Tournaments this User is participating in.
     * (one to many)
     * @return Illuminate\Support\Collection App\Tournament
     */
    public function tournaments()
    {
        return $this->belongsToMany('App\Tournament','users_touranments');
    }

    /**
     * Get Tournaments this User is participating in.
     * (one to many)
     * @return Illuminate\Support\Collection App\Team
     */
    public function teams()
    {
        return $this->belongsToMany('App\Team','users_local_teams');
    }
}
