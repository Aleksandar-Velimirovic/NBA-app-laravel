<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Player;

class PlayersController extends Controller
{
    public function index(){

        $players = Player::all();

        return view('teams.show', compact('players'));
    }

    public function show($id){

        $player = Player::findOrFail($id);
        return view('players.show', compact('player'));
    }
}
