<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Guest extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [];

    /**
     * Get the Team this Guest belongs to.
     * (many to one)
     * @return App\Team [description]
     */
    public function team()
    {
        return $this->belongsTo('App\Team');
    }
}
