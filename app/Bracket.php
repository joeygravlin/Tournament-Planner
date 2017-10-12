<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bracket extends Model
{
    /**
     * Get the Tournament this Bracket belongs to.
     * (many to one)
     * @return App\Tournament [description]
     */
    public function tournament()
    {
        return $this->belongsTo('App\Tournament');
    }

    /**
     * FIXME
     * ?? Wouldn't this belong to 0-2 team(s) ??
     * many to (n)one (there will be brackets with no matching team)
     * @return Illuminate\Support\Collection App\Team
     */
    public function team()
    {
        return $this->belongsTo('App\Team');
    }
}
