<?php

namespace App\Http\Requests\Contents;

use App\Content;
use Illuminate\Foundation\Http\FormRequest;

class AdminCreateContentRequest extends FormRequest
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
      'description' => 'required|string'
    ];
  }

  public function messages()
  {
    return [
      'name.required' => 'El nombre es obligatorio',
      'description.required' => 'La descripción es obligatoria'
    ];
  }
  
  public function createContent(Content $content)
  {
    $content->fill([
      'name' => $this->name,
      'description' => $this->description
    ]);

    $content->save();
  }
}
