<?php

namespace App\Http\Controllers\Admin;

use App\Models\Team;
use App\Queries\TeamFilter;
use App\Http\Controllers\Controller;
use App\Http\Requests\Teams\{AdminCreateTeamRequest, AdminUpdateTeamRequest};
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class TeamController extends Controller
{
  public function __construct()
  {
    $this->middleware('auth');
  }

  /**
   * Display a listing of the resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function index(Request $request, TeamFilter $filters)
  {
    $teams = Team::query()
                  ->filterBy($filters, $request->only(['search', 'from', 'to']))
                  ->orderBy('id', 'DESC')
                  ->paginate();
    
    $teams->appends($filters->valid());

    return view('admin.teams.index', compact('teams'));
  }

  /**
   * Show the form for creating a new resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function create()
  {
    return view('admin.teams.create');
  }

  /**
   * Store a newly created resource in storage.
   *
   * @param  \App\Team  $team
   * @param  \Illuminate\Http\Requests\Teams\AdminCreateTeamRequest  $request
   * @return \Illuminate\Http\Response
   */
  public function store(AdminCreateTeamRequest $request, Team $team)
  {
    $request->createTeam($team);

    return redirect()->route('adminTeams')->with('message', 'Miembro del Equipo creado con éxito');
  }

  /**
   * Display the specified resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function show()
  {
    //
  }

  /**
   * Show the form for editing the specified resource.
   *
   * @param  \App\Team  $team
   * @return \Illuminate\Http\Response
   */
  public function edit(Team $team)
  {
    return view('admin.teams.edit', ['team' => $team]);
  }

  /**
   * Update the specified resource in storage.
   *
   * @param  \App\Team  $team
   * @param  \Illuminate\Http\Requests\Teams\AdminUpdateTeamRequest  $request
   * @return \Illuminate\Http\Response
   */
  public function update(AdminUpdateTeamRequest $request, Team $team)
  {
    $request->updateTeam($team);

    return redirect()->route('adminTeams')->with('message', 'Miembro del Equipo actualizado con éxito');
  }

  /**
   * Display a listing trashed of the resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function trashed()
  {
    $teams = Team::onlyTrashed()->get();

    return view('admin.teams.trashed', compact('teams'));
  }

  /**
   * Delete the specified resource.
   *
   * @param  \App\Team  $team
   * @return \Illuminate\Http\Response
   */
  public function delete(Team $team)
  {
    $team->delete();

    return redirect()->route('adminTeams')->with('message', 'Miembro del Equipo eliminado con éxito');
  }

  /**
   * Restore the specified resource.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function restore(int $id)
  {
    $team = Team::onlyTrashed()->where('id', $id)->first();

    $team->restore();

    return redirect()->back()->with('message','Equipo restaurado con éxito');
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function destroy(int $id)
  {
    $team = Team::onlyTrashed()->where('id', $id)->first();

    $teamImage = $team->image;
    Storage::disk('public')->delete('teams/'.$teamImage);

    $team->forceDelete();

    return redirect()->back()->with('message', 'Equipo elimanado con éxito');
  }
}
