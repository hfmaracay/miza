<?php

namespace App\Rules;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Contracts\Validation\Rule;

class PasswordValido implements Rule
{
  /**
   * Create a new rule instance.
   *
   * @return void
   */
  public function __construct($userID)
  {
    $this->userID = $userID;
  }

  /**
   * Determine if the validation rule passes.
   *
   * @param  string  $attribute
   * @param  mixed  $value
   * @return bool
   */
  public function passes($attribute, $value)
  {
    $user = DB::table('users')->where('id', $this->userID)->first();  

    return Hash::check($value, $user->password);
  }

  /**
   * Get the validation error message.
   *
   * @return string
   */
  public function message()
  {
    return 'La Contraseña no es válida.';
  }
}
