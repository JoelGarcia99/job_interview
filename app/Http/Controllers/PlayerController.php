<?php

namespace App\Http\Controllers;

use App\Models\Player;
use Illuminate\Http\Request;

class PlayerController extends Controller
{

  public function index() {
    $players = Player::join('teams', 'teams.id', '=', 'players.team_id')
	      ->paginate(10, ['players.*', 'teams.name as team_name']);

    return view('players.index', compact('players'));
  }
}
