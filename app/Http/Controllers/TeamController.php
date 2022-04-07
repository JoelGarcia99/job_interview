<?php

namespace App\Http\Controllers;

use App\Models\Team;
use Illuminate\Http\Request;

class TeamController extends Controller
{

  public function index() {
    $teams = Team::paginate(10);

    return view('teams.index', ['teams'=>$teams]);
  }

  public function create() {

    return view('teams.create');
  }

  public function store(Request $request) {
    $request->validate([
      'name'=>'required|max:80',
      'slug'=>'required',
      'color' => 'required|max:20',
      'location' => 'required|max:100',
      'history' => 'required'
    ]);


    $team = Team::create($request->all());

    return redirect()->route('teams.show', $team);
  }

  public function show(Team $team) {
    return view('teams.show', ['team'=>$team]);
  }

  public function edit(Team $team) {
    return view('teams.edit', compact('team'));
  }

  public function update(Request $request, Team $team) {
    $request->validate([
      'name'=>'required|max:80',
      'slug'=>'required',
      'color' => 'required|max:20',
      'location' => 'required|max:100',
      'history' => 'required'
    ]);

    $team->name = $request->name;
    $team->slug = $request->slug;
    $team->history = $request->history;
    $team->location = $request->location;
    $team->color = $request->color;

    $team->save();

    return view('teams.show', compact('team'));
  }

  public function destroy(Team $team) {

    $team->delete();

    return redirect()->route('teams.index');
  }
}
