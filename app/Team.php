<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'local_teams';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['name'];


    /**
     * Get the guests on this team.
     * (one to many)
     * @return Illuminate\Support\Collection App\Guest
     */
    public function guests()
    {
        return $this->hasMany('App\Guest');
    }

    /**
     * Get the brackets this team belongs to.
     * (one to many)
     * @return Illuminate\Support\Collection App\Bracket
     */
    public function brackets()
    {
        return $this->hasMany('App\Bracket');
    }

    /**
     * Get the tournaments this team belongs to.
     * (one to many)
     * @return Illuminate\Support\Collection App\Tournament
     */
    public function tournament()
    {
        return $this->belongsTo('App\Tournament');
    }

    /**
     * Get the users on this team.
     * (one to many)
     * @return Illuminate\Support\Collection App\User
     */
    public function users()
    {
        return $this->belongsToMany('App\User', 'users_local_teams');
    }
}
