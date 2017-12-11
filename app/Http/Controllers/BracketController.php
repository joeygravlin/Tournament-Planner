<?php

namespace App\Http\Controllers;

use App\Bracket;
use App\Team;
use Illuminate\Http\Request;

class BracketController extends Controller
{
    /**
     * Display the specified resource.
     *
     * @param  \App\Bracket  $bracket
     * @return \Illuminate\Http\Response
     */
    public function show(Bracket $bracket)
    {
        return $bracket;
    }

    public function initTree($id){
        //TODO: check if user is tournament creator
        $teams = Team::where('tournament_id', $id)->count();
        if($teams >= 2) {
            $treesize = 2 * pow(2, ceil(log($teams) / log(2))) - 1;

            //remove any existing brackets for this tournament
            Bracket::where('tournament_id', $id)->delete();

            //generate empty brackets
            for($i = 0; $i<$treesize; $i++){
                $bracket = new Bracket();
                $bracket->node_id = $i;
                $bracket->tournament_id = $id;
                $bracket->score = 0;
                $bracket->save();
            }

            //inject team id's into leaf-node-brackets in random order
            $teamIDs = Team::where('tournament_id', $id)->pluck('id')->toArray();
            shuffle($teamIDs);
            //var_dump($teamIDs);

            for($i = 0; $i < count($teamIDs); $i++){
                // treesize/2+i to get nodeid's of leafs
                $bracket = Bracket::where([['tournament_id','=',$id],['node_id','=',floor($treesize/2)+$i]])->first();
                $bracket->team_id = $teamIDs[$i];
                $bracket->save();
            }

        } else{
            //not enough teams
        }
    }


    /**
     * @param $id of bracket
     * sets the team_id of the parent node equal to the team_id of a given node
     */
    public function win($id){
        $bracket = Bracket::findOrFail($id);
        if(!is_null($bracket->team_id) && $bracket->node_id > 0){
            $nodeid = $bracket->node_id;
            $parentnodeid = floor(($nodeid-1)/2);

            $parent = Bracket::where([['tournament_id','=',$bracket->tournament_id],['node_id','=',$parentnodeid]])->first();
            if(is_null($parent->team_id)) {
                $parent->team_id = $bracket->team_id;
                $parent->save();
            }
        }
    }

    public function setScore($id, $score){
        $bracket = Bracket::find($id);
        if(!is_null($bracket)){
            $bracket->score = $score;
            $bracket->save();
        }
    }
}