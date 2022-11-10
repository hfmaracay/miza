<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use App\Queries\UserFilter;
use App\Http\Controllers\Controller;
use App\Http\Requests\Users\AdminUpdateProfileRequest;
use Illuminate\Http\Request;

class UserController extends Controller
{
  /**
   * Display a listing of the resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function index(Request $request, UserFilter $filters)
  {
    if(isset($request->role)) {
      $users = User::query()
                    ->filterBy($filters, $request->only(['search', 'from', 'to']))
                    ->whereIs($request->role)
                    ->orderBy('id', 'DESC')
                    ->paginate();
    } else {
      $users = User::query()
                    ->filterBy($filters, $request->only(['search', 'from', 'to']))
                    ->orderBy('id', 'DESC')
                    ->paginate();
    }

    $users->appends($filters->valid());

    return view('admin.users.index', compact('users'));
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
  public function show(User $user)
  {
    //
  }

  /**
   * Show the form for editing the specified resource.
   *
   * @param  \App\User  $user
   * @return \Illuminate\Http\Response
   */
  public function edit(User $user)
  {
    return view('admin.users.edit', compact('user'));
  }

  /**
   * Show the form for editing password the specified resource.
   *
   * @param  \App\User  $user
   * @return \Illuminate\Http\Response
   */
  public function password(User $user)
  {
    return view ('admin.users.password', compact('user'));
  }

  /**
   * Update the specified resource in storage.
   *
   * @param  \App\User  $user
   * @param  \App\Http\Requests\Users\AdminUpdateProfileRequest  $request
   * @return \Illuminate\Http\Response
   */
  public function update(AdminUpdateProfileRequest $request, User $user)
  {
    $request->updateProfile($user);

    return redirect()->route('adminUsers')->with('message', 'Usuario actualizado con éxito');
  }

  /**
   * Update password the specified resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @param  \App\User  $user
   * @return \Illuminate\Http\Response
   */
  public function updatePassword(Request $request, User $user)
  {
    $request->validate([
      'password' => 'required|min:8',
      'password_confirmation' => 'same:password|min:8'
    ], [
      'password.required' => 'Contraseña Nueva es Requerida',
      'password.min' => 'Contraseña Nueva debe ser de mínimo 8 caracteres',
      'password_confirmation.same' => 'Contraseña de confirmación no coincide',
    ]);
    
    $user->update(['password' => bcrypt($request->password)]);

    return redirect()->route('adminUsers.password', $user)
                     ->with('message', 'Tu clave ha sido cambiada correctamente');
  }

  public function rol(int $id)
  {
    $user = User::find($id);

    if($user->isAdmin()) {
      $user->retract('admin');
    } else {
      $user->assign('admin');
    }
    
    return response()->json(["success" => true]);
  }

  /**
   * Display a listing trashed of the resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function trashed()
  {
    $users = User::onlyTrashed()->get();

    return view('admin.users.trashed', compact('users'));
  }

  /**
   * Delete the specified resource.
   *
   * @param  \App\User  $user
   * @return \Illuminate\Http\Response
   */
  public function delete(User $user)
  {
    $user->delete();
    
    return redirect()->route('adminUsers')->with('message', 'Usuario eliminado con éxito');
  }

  /**
   * Restore the specified resource.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function restore(int $id)
  {
    $user = User::onlyTrashed()->where('id', $id)->first();
    
    $user->restore();

    return redirect()->back()->with('message','Usuario restaurado con éxito');
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function destroy(int $id)
  {
    $user = User::onlyTrashed()->where('id', $id)->first();

    $user->forceDelete();

    return redirect()->back()->with('message', 'Usuario elimanado con éxito');
  }
}
