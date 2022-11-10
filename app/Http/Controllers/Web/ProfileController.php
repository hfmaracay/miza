<?php

namespace App\Http\Controllers\Web;

use App\Models\User;
use App\Http\Controllers\Controller;
use App\Http\Requests\Users\{UpdateProfileRequest, UpdatePasswordRequest};
use Illuminate\Http\Request;

class ProfileController extends Controller
{
  /**
   * Display a listing of the resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function index()
  {
    //
  }

  /**
   * Show the form for creating a new resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function create()
  {
    //
  }

  /**
   * Store a newly created resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @return \Illuminate\Http\Response
   */
  public function store(Request $request)
  {
    //
  }

  /**
   * Display the specified resource.
   *
   * @param  \App\User  $user
   * @return \Illuminate\Http\Response
   */
  public function show()
  {
    return view('web.profile'); 
  }

  /**
   * Show the form for editing the specified resource.
   *
   * @param  \App\User  $user
   * @return \Illuminate\Http\Response
   */
  public function edit(User $user)
  {
    //
  }

  /**
   * Update the specified resource in storage.
   *
   * @param  App\Http\Requests\Users\UpdateProfileRequest  $request
   * @return \Illuminate\Http\Response
   */
  public function update(UpdateProfileRequest $request)
  {
    $request->updateProfile();

    return redirect()->route('profile')
                     ->with('message', 'Perfil autualizado correctamente.');
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  \App\User  $user
   * @return \Illuminate\Http\Response
   */
  public function destroy(User $user)
  {
    //
  }

  /**
   * Display the Password View.
   *
   * @return \Illuminate\Http\Response
   */
  public function passwordView()
  {
    return view('web.password');
  }

  /**
   * Update the specified resource in storage.
   *
   * @param  App\Http\Requests\Users\UpdatePasswordRequest  $request
   * @return \Illuminate\Http\Response
   */
  public function updatePassword(UpdatePasswordRequest $request)
  {
    $request->updatePass();
    
    return redirect()->route('password')
                     ->with('message', 'Tu contraseña ha sido cambiada correctamente.');
  }
}
