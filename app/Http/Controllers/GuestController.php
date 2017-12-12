<?php

namespace App\Http\Controllers;

use App\Guest;
use Illuminate\Http\Request;

class GuestController extends Controller
{
    /**
     * Display the specified resource.
     *
     * @param  \App\Guest  $guest
     * @return \Illuminate\Http\Response
     */
    public function show(Guest $guest)
    {
        return $guest;
    }

    public function deleteGuest($id){
        $guest = Guest::find($id);
        $guest->delete();
    }
}
