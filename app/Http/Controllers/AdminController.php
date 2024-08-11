<?php

namespace App\Http\Controllers;

use App\Models\Lobby;
use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    private User $auth;

    public function __construct()
    {
        $this->auth = auth()->user();
    }

    public function index()
    {
        $lobbies = $this->auth->lobbies;
        return view('admin.index', compact('lobbies'));
    }

    public function createGame()
    {
        $lobby = new Lobby();
        $lobby->owner_id = $this->auth->id;
        $lobby->save();
        return redirect()->route('get.game.lobby', ['lobby' => $lobby->code])->with('success', 'Game session created.');
    }

    public function lobby()
    {
        return view('admin.lobby');
    }
}
