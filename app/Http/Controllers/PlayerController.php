<?php

namespace App\Http\Controllers;

use App\Models\Player;
use App\Models\Team;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class PlayerController extends Controller
{

  public function index() {
    $players = Player::leftJoin('teams', 'teams.id', '=', 'players.team_id')
	      ->paginate(10, ['players.*', 'teams.name as team_name']);


    return view('players.index', compact('players'));
  }

  public function show(Player $player) {
    $team = $player->team_id == null
      ? null
      :Team::where('id', $player->team_id)
	      ->first();


    return view('players.show', compact('player', 'team'));
  }

  public function create() {
    $teams = Team::all();

    return view('players.create', compact('teams'));
  }

  public function store(Request $request) {
    $request->validate([
      'name'=>'required',
      'team_id'=>'required',
      'position'=>'required',
      'foot'=>'required',
      'dorsal'=>'required|min:1|max:99',
      'born_date' => 'required|date'

    ]);
    $request->request->add(['slug'=>Str::slug($request->name.$request->team_id.$request->id, '-')]);

    $player = Player::create($request->all());
    $team = $player->team_id == null
      ? null
      :Team::where('id', $player->team_id)
	      ->first();

    return view('players.show', compact('player', 'team'));
  }

  public function destroy(Player $player) {
    $player -> delete();

    return redirect()->route('player.index');
  }
}
