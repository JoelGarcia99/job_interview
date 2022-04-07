<?php

namespace App\Http\Controllers;

use App\Models\Team;
use Illuminate\Http\Request;

class TeamController extends Controller
{

  public function index() {
    $teams = Team::paginate();

    return view('teams.index', ['teams'=>$teams]);
  }

  public function create() {

    return view('teams.create');
  }

  public function store(Request $request) {
    $request->validate([
      'name'=>'required|max:50',
      'slug'=>'required|max:60',
      'color' => 'required|max:20',
      'location' => 'required|max:100'
    ]);

    $team = Team::create($request->all());

    return redirect()->route('teams.create');
  }

  public function show(Team $team) {

    return view('teams.show', ['team'=>$team]);
  }
}
