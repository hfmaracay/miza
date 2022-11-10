<?php

namespace App\Http\Controllers\Web;

use App\Models\{Message, Content};
use App\Http\Controllers\Controller;
use App\Http\Requests\Messages\WebCreateMessageRequest;
use App\Mail\ContactMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

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
    $mailMessage = $request->createMessage($message);

    Mail::to('miza.ucv@gmail.com', 'MIZA Contacto Web')->send(new ContactMail($mailMessage));

    return redirect()->route('contact')->with('message', 'Su mensaje ha sido enviado con éxito');
  }
}
