<?php

namespace App\Http\Requests\Users;

use App\User;
use Illuminate\Validation\Rule;
use Illuminate\Foundation\Http\FormRequest;

class AdminUpdateProfileRequest extends FormRequest
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
      'name' => 'required',
      'email' => ['required', 'email', Rule::unique('users')->ignore($this->route('user'))]
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
      'name.required' => 'Nombre y Apellido es Obligatorio',
      'email.required' => 'Email es Obligatorio',
      'email.email' => 'Email es Inválido',
      'email.unique' => 'Email debe ser Único',
    ];
  }

  public function updateProfile(User $user) {
    $user->fill([
      'name' => $this->name,
      'email' => $this->email,
    ]);

    $user->save();
  }
}
