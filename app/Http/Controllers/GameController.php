<?php

namespace App\Http\Controllers;

use App\Models\Lobby;
use Illuminate\Http\Request;

class GameController extends Controller
{
    public function lobby(Lobby $lobby)
    {
        $lobby->load('users', 'owner');
        return view('lobby', compact('lobby'));
    }
}
