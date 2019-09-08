<?php

namespace App\Http\Requests\Users;

use App\Rules\PasswordValido;
use Illuminate\Foundation\Http\FormRequest;

class UpdatePasswordRequest extends FormRequest
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
      'password' => ['required', new PasswordValido(auth()->user()->id)],
      'newPassword' => 'required|confirmed|min:8',
      'newPassword_confirmation' => 'required|same:newPassword',
    ];
  }

  /**
   * Get the validation messages that apply to the request.
   *
   * @return array
   */
  public function messages()
  {
    return [
      'password.required' => 'La Contraseña es Obligatoria',
      'newPassword.required' => 'La Contraseña es Obligatoria',
      'newPassword.confirmed' => 'Las Contraseñas no coinciden',
      'newPassword.min' => 'La Contraseña debe tener mínimo 8 caracteres',
      'newPassword_confirmation.required' => 'Debe confirmar la Contraseña',
      'newPassword_confirmation.same' => 'Las Contraseñas no coinciden',
    ];
  }

  public function updatePass() {
    $user = auth()->user();

    $user->fill(['password' => bcrypt($this->newPassword)]);

    $user->save();
  }
}
