<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MenuInfo extends Controller
{
    /**
     * Handle the incoming request.
     *
     */
    public function __invoke(Request $request)
    {
        $user = auth()->user();
        $user_energy = 0;
        
        return view('menus.info', [
            'user' => $user,
            'user_energy' => $user_energy
        ]);
    }
}
