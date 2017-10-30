<?php

namespace App\Http\Controllers;

use App\Tournament;
use Illuminate\Http\Request;

class TournamentController extends Controller
{
    /**
     * Display the specified resource.
     *
     * @param  \App\Tournament  $tournament
     * @return \Illuminate\Http\Response
     */
    public function show(Tournament $tournament)
    {
        return $tournament;
    }

    public function users($id)
    {
        return Tournament::find($id)->users()->get();
    }

    public function teams($id)
    {
        return Tournament::find($id)->teams()->get();
    }

    public function brackets($id)
    {
        return Tournament::find($id)->brackets()->get();
    }

}
