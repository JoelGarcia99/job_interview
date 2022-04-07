<?php

namespace App\Http\Controllers;

use App\Models\Player;
use App\Models\Team;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class PlayerController extends Controller
{

  public function index() {
    // This join will help us to print the name of the team
    // on the general table
    $players = Player::leftJoin('teams', 'teams.id', '=', 'players.team_id')
	      ->paginate(10, ['players.*', 'teams.name as team_name']);


    return view('players.index', compact('players'));
  }

  public function show(Player $player) {
    // Just like @index method, the @team variable will 
    // store team's data to print the team name instead
    // of the ID
    $team = $player->team_id == null
      ? null
      :Team::where('id', $player->team_id)->first();


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

    // The slug should be auto generated since it needs to
    // be unique and the user could no be aware about the slug
    // limitations
    $request->request->add(['slug'=>Str::slug($request->name.$request->team_id.$request->id, '-')]);

    $player = Player::create($request->all());

    // The team where the player plays in needs to be queried to 
    // call the 'show' view.
    $team = $player->team_id == null
      ? null
      :Team::where('id', $player->team_id) ->first();

    return redirect()->route('player.show', compact('player', 'team'));
  }

  public function destroy(Player $player) {
    $player -> delete();

    return redirect()->route('player.index');
  }

  public function edit(Player $player) {
    $teams = Team::all();

    return view('players.edit', compact('player', 'teams'));
  }

  public function update(Request $request, Player $player) {

    // It is better to update all these fields this way since
    // if you make a massive assignation there could be fields
    // you don't want to override.
    $player->name = $request->name;
    $player->dorsal = $request->dorsal;
    $player->position = $request->position;
    $player->foot = $request->foot;
    $player->born_date = $request->born_date;
    $player->team_id = $request->team_id;

    $player->save();

    return redirect()->route('player.show', compact('player'));
  }
}
