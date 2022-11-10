<?php

namespace App\Http\Controllers\Admin;

use App\Models\Message;
use App\Queries\MessageFilter;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MessageController extends Controller
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
  public function index(Request $request, MessageFilter $filters)
  {
    $messages = Message::query()
                        ->filterBy($filters, $request->only(['search', 'from', 'to']))
                        ->orderBy('id', 'DESC')
                        ->paginate();
                    
    $messages->appends($filters->valid());
    
    return view('admin.messages.index', compact('messages'));
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
   * @param  \App\Message  $message
   * @return \Illuminate\Http\Response
   */
  public function show(Message $message)
  {
    return view('admin.messages.show', ['message' => $message]);
  }

  /**
   * Show the form for editing the specified resource.
   *
   * @param  \App\Message  $message
   * @return \Illuminate\Http\Response
   */
  public function edit(Message $message)
  {
    //
  }

  /**
   * Update the specified resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @param  \App\Message  $message
   * @return \Illuminate\Http\Response
   */
  public function update(Request $request, Message $message)
  {
    //
  }

  /**
   * Display a listing trashed of the resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function trashed()
  {
    $messages = Message::onlyTrashed()->get();

    return view('admin.messages.trashed', compact('messages'));
  }

  /**
   * Delete the specified resource.
   *
   * @param  \App\Message  $message
   * @return \Illuminate\Http\Response
   */
  public function delete(Message $message)
  {
    $message->delete();

    return redirect()->route('adminMessages')->with('message', 'Mensaje eliminado con éxito');
  }

  /**
   * Restore the specified resource.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function restore(int $id)
  {
    $message = Message::onlyTrashed()->where('id', $id)->first();

    $message->restore();

    return redirect()->back()->with('message', 'Mensaje restaurado con éxito');
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function destroy(int $id)
  {
    $message = Message::onlyTrashed()->where('id', $id)->first();

    $message->forceDelete();

    return redirect()->back()->with('message', 'Mensaje elimanado con éxito');
  }
}
