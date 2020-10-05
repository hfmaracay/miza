<?php

namespace App\Http\Controllers\Web;

use App\Team;
use App\Queries\TeamFilter;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TeamController extends Controller
{
  /**
   * Show the application dashboard.
   *
   * @return \Illuminate\Contracts\Support\Renderable
   */
  public function index(Request $request, TeamFilter $filters)
  {
    $team = Team::query()
                ->filterBy($filters, $request->only(['search', 'from', 'to']))
                ->orderBy('order', 'ASC')
                ->paginate(9);
    
    $team->appends($filters->valid());

    return view('web.team', compact('team'));
  }

  /**
   * Display the specified resource.
   *
   * @param  \App\Team  $team
   * @return \Illuminate\Http\Response
   */
  public function show(Team $team)
  {
    return view('web.team_show', compact('team'));
  }
}
