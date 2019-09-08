<?php

namespace App\Http\Requests\Teams;

use App\Team;
use Illuminate\Support\Facades\Storage;
use Illuminate\Foundation\Http\FormRequest;

class AdminUpdateTeamRequest extends FormRequest
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
      'last_name' => 'required|string',
      'title' => 'required|string',
      'description' => 'required|string',
      'photo' => 'nullable|image'
    ];
  }

  public function messages()
  {
    return [
      'name.required' => 'Nombre es requerido',
      'last_name.required' => 'Apellido es requerido',
      'title.required' => 'Cargo es requerido',
      'description.required' => 'Descripción es requerida',
      'photo.image' => 'Foto es inválida'
    ];
  }

  public function updateTeam(Team $team)
  {
    $old_image = $team->photo;

    $team->fill([
      'name' => $this->name,
      'last_name' => $this->last_name,
      'title' => $this->title,
      'description' => $this->description
    ]);
    
    if($this->hasFile('photo')) {
      $fileImage = $this->file('photo');
      $path = $fileImage->path();
      $extension = $fileImage->extension();
      $imageName = $fileImage->getClientOriginalName();
      $filename = pathinfo($imageName, PATHINFO_FILENAME);  // FILE NAME WITHOUT EXTENSION

      // ADD A NUMBER IF FILE EXISTS
      $i = 1;
      while(Storage::disk('public')->exists('teams/'.$imageName)) {
        $imageName = $filename.'_'.$i.'.'.$extension;
        $i++;
      }
      Storage::disk('public')->putFileAs('teams/', $fileImage, $imageName);

      if(Storage::disk('public')->exists('teams/' . $old_image)) {
        Storage::disk('public')->delete('teams/' . $old_image);
      }
      
      $team->image = $imageName;
    }

    $team->save();
  }
}
