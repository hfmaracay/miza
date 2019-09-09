<?php

namespace App\Http\Controllers\Web;

use App\{Message, Content};
use App\Http\Controllers\Controller;
use App\Http\Requests\Messages\WebCreateMessageRequest;
use Illuminate\Http\Request;

class MessageController extends Controller
{
  /**
   * Show the form for creating a new resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function create()
  {
    $content = Content::find(7);

    return view('web.contact', compact('content'));
  }

  /**
   * Store a newly created resource in storage.
   *
   * @param  \App\Http\Requests\Messages\WebCreateMessageRequest  $request
   * @return \Illuminate\Http\Response
   */
  public function store(WebCreateMessageRequest $request)
  {
    $message = new Message;
    $request->createMessage($message);

    return redirect()->route('contact')->with('message', 'Su mensaje ha sido enviado con éxito');
  }
}
