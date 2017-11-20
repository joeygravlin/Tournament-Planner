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

    public function addUser($tid, $uid)
    {
        $team = Team::find($tid);

        if(!is_null($team)){
            $allowedtojoin = $team->userAllowedToJoin($uid);
            if($allowedtojoin){
                $team->users()->attach($uid);
                echo "user added to team. \n";
            }
        } else {
            echo "ERROR: team(id=". $tid.") does not exist.\n";
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
}
