<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class MenuInfo extends Controller
{
    /**
     * Handle the incoming request.
     *
     */
    public function __invoke(Request $request)
    {
        $user = auth()->user();
        $user_energy = User::getUserEnergies($user->id);

        return view('menus.info', [
            'user' => $user_energy[0]
        ]);
    }
}
