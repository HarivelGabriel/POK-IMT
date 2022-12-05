<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class MenuTeam extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        $pokemons_user = User::getUserPokemons(auth()->user()->id);
        return view('menus.team', ['pkmn' => $pokemons_user, 'user'=>auth()->user()]);
    }
}
