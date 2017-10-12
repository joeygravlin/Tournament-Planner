<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tournament extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'description', 'public', 'number_of_teams', 'max_team_size'
    ];


    /**
     * Get the Brackets within in this Tournament.
     * (one to many)
     * @return Illuminate\Support\Collection App\Bracket
     */
    public function brackets()
    {
        return $this->hasMany('App\Bracket');
    }

    /**
     * Get the Teams participating in this Tournament.
     * (one to many)
     * @return Illuminate\Support\Collection App\Team
     */
    public function teams()
    {
        return $this->hasMany('App\Team');
    }

    /**
     * Get the User who created this Tournament.
     * (one to many)
     * @return Illuminate\Support\Collection App\User
     */
    public function creator()
    {
        return $this->belongsTo('App\User', 'creator', 'id');
    }

    /**
     * Get the Users participating in this Tournament.
     * (one to many)
     * @return Illuminate\Support\Collection App\User
     */
    public function users()
    {
        return $this->belongsToMany('App\User', 'users_tournaments');
    }
}
