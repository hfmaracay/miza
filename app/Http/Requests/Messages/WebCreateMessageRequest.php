<?php

namespace App\Http\Requests\Messages;

use App\Message;
use Illuminate\Foundation\Http\FormRequest;

class WebCreateMessageRequest extends FormRequest
{
  /**
   * Determine if the user is authorized to make this request.
   *
   * @return bool
   */
  public function authorize()
  {
    return true;
  }

  /**
   * Get the validation rules that apply to the request.
   *
   * @return array
   */
  public function rules()
  {
    return [
      'name' => 'required|string',
      'email' => 'required|email',
      'description' => 'required|string'
    ];
  }

  public function messages()
  {
    return [
      'name.required' => 'Nombre es requerido',
      'email.required' => 'Email es requerido',
      'email.email' => 'Email es inválido',
      'description.required' => 'Mensaje es requerido'
    ];
  }

  public function createMessage() 
  {    
    $message = Message::create([
      'name' => $this->name,
      'email' => $this->email,
      'description' => $this->description
    ]);

    return $message;
  }
}
