<?php

namespace App\Http\Controllers;

use App\Team;
use Illuminate\Http\Request;

class TeamController extends Controller
{
    /**
     * Display the specified resource.
     *
     * @param  \App\Team  $team
     * @return \Illuminate\Http\Response
     */
    public function show(Team $team)
    {
        return $team;
    }

    public function users($id)
    {
        return Team::find($id)->users()->get();
    }

    public function guests($id)
    {
        return Team::find($id)->guests()->get();
    }
}
