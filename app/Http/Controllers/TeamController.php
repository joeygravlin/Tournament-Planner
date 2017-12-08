<?php

namespace App\Http\Controllers;

use App\Team;
use App\Guest;
use Illuminate\Http\Request;
use Mockery\Exception;

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

    public function addUser($tid, $uid)
    {
        $team = Team::find($tid);
        echo $team->userAllowedToJoin($uid);
        if(!is_null($team) && $team->userAllowedToJoin($uid)){
            $team->users()->attach($uid);
        } else {
            echo "else...";
           // team does not exist / user not allowed to join
        }
    }

    public function addGuest($tid, $guest)
    {
        $team = Team::find($tid);

        if(!is_null($team)){
            $g = new Guest();
            $g->name = $guest;
            $g->team_id = $tid;
            $g->save();
        }

    }

    public function create(Request $request)
    {
        $team = new team;

        $team->name = $request->name;
        $team->tournament_id = $request->tournamentid;

        $team->save();
        return $team;
    }

    public function removeUser($tid, $uid){
        $team = Team::find($tid);
        $team->removeUser($uid);
    }

    public function deleteTeam($id){
        $team = Team::find($id);
        $team->delete();
    }
}
