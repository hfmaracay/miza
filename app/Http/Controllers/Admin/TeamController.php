<?php

namespace App\Http\Controllers\Admin;

use App\Team;
use App\Queries\TeamFilter;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\Teams\{AdminCreateTeamRequest, AdminUpdateTeamRequest};

class TeamController extends Controller
{
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }
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
        return view('admin.team.index',compact('teams'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.team.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(AdminCreateTeamRequest $request, Team $team)
    {
        $request->createTeam($team);

        return redirect()->route('admin.team')->with('message', 'Equipo creado con éxito');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Team  $team
     * @return \Illuminate\Http\Response
     */
    public function edit(Team $team)
    {
        return view('admin.team.edit', ['team' => $team]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Team  $team
     * @return \Illuminate\Http\Response
     */
    public function update(AdminUpdateTeamRequest $request, Team $team)
    {
        $request->updateTeam($team);

        return redirect()->route('admin.team')->with('message', 'Equipo actualizado con éxito');
    }

    /**
     * Display a listing trashed of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function trashed()
    {
      $teams = Team::onlyTrashed()->get();

      return view('admin.team.trashed', compact('teams'));
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

      return redirect()->route('admin.team')->with('message', 'Equipo eliminado con éxito');
    }

    public function restore(int $id)
    {
      $team = Team::onlyTrashed()->where('id',$id);

      $team->restore();

      return redirect()->back()->with('message','Equipo restaurado con éxito');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Team  $team
     * @return \Illuminate\Http\Response
     */
    public function destroy(int $id)
    {
        $team = Team::onlyTrashed()->where('id', $id)->first();

        $team->forceDelete();

        return redirect()->back()->with('message', 'Equipo elimanado con éxito');
    }
}
