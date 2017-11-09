<?php

namespace App\Http\Controllers;

use App\Bracket;
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
}
