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
}
