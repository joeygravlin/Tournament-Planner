<?php

namespace App\Http\Controllers;
use App\Tournament;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function __construct()
    {
        //$this->middleware('auth');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        return $user;
    }

    public function currentUser()
    {
        return Auth::user()->makeVisible('email');
    }

    public function tournaments()
    {
        $tournaments = User::find(Auth::id())->tournaments()->orderBy('created_at')->get();
        return $tournaments;
    }
}
