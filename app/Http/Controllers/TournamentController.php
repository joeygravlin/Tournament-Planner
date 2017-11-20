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

    public function addUser($tid, $uid){
        $tournament = Tournament::find($tid);
        $tournament->users()->attach($uid);
    }

    public function create(Request $request)
    {
        $tournament = new Tournament;

        $tournament->name = $request->name;
        //TODO: get creators id from auth middleware
        $tournament->creator = 1;
        $tournament->description = $request->description;
        $tournament->public = $request->public;
        $tournament->number_of_teams = $request->size;
        $tournament->max_team_size = $request->teamsize;

        $tournament->save();
        return $tournament;
    }
}
