<?php

namespace App\Http\Controllers;

use App\Models\Player;
use App\Models\Team;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class TeamController extends Controller
{

  public function index() {
    $teams = Team::paginate(10);

    return view('teams.index', ['teams'=>$teams]);
  }

  public function create() {

    return view('teams.create');
  }

  public function validate_fields(Request $request) {
    $request->validate([
      'name'=>'required|max:80',
      'color' => 'required|max:20',
      'location' => 'required|max:100',
      'history' => 'required',
      'stadium' => 'required|max:100',
      'dt' => 'required|max:100'
    ]);
  }


  public function store(Request $request) {

    $this->validate_fields($request);
    $request->request->add(['slug'=>Str::slug($request->name.$request->id.$request->dt, '-')]);
    $team = Team::create($request->all());

    return redirect()->route('teams.show', $team);
  }

  public function show(Team $team) {
    // Players related to this team
    $players = Player::where('team_id', $team->id)->paginate(5);
    return view('teams.show', compact('team', 'players'));
  }

  public function edit(Team $team) {
    return view('teams.edit', compact('team'));
  }

  public function update(Request $request, Team $team) {
    $this->validate_fields($request);

    $team->name = $request->name;
    $team->slug = $request->slug;
    $team->history = $request->history;
    $team->location = $request->location;
    $team->color = $request->color;
    $team->dt = $request->dt;
    $team->stadium = $request->stadium;

    $team->save();

    // list of players related to this team
    $players = Player::where('team_id', $team->id)->paginate(5);
    return view('teams.show', compact('team', 'players'));
  }

  public function destroy(Team $team) {

    $team->delete();

    return redirect()->route('teams.index');
  }
}
