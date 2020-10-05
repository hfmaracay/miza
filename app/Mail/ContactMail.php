<?php

namespace App\Mail;

use App\Message;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ContactMail extends Mailable
{
  use Queueable, SerializesModels;

  /**
   * The message instance.
   *
   * @var Message
   */
  public $message;

  /**
   * Create a new message instance.
   *
   * @return void
   */
  public function __construct(Message $message)
  {
    $this->message = $message;
  }

  /**
   * Build the message.
   *
   * @return $this
   */
  public function build()
  {
    return $this->subject('Contacto MIZA')->markdown('emails.contact');
  }
}
