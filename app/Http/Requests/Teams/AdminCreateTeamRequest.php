<?php

namespace App\Http\Requests\Teams;

use App\Team;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Storage;

class AdminCreateTeamRequest extends FormRequest
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
            'description' => 'required|string',
            'image' => 'required|image',
            'title' => 'required|string'
        ];
    }

    public function messages()
     {
       return [
         'name.required' => 'Nombre requerido',
         'last_name.required' => 'Apellido requerido',
         'description.required' => 'Descripción requerida',
         'image.required' => 'Imagen requerida',
         'image.image' => 'Imagen inválida',
         'title.required' => 'El cargo es requerido'
       ];
     }

     public function createTeam() 
       {
         $fileImage = $this->file('image');
         $path = $fileImage->path();
         $extension = $fileImage->extension();
         $imageName = $fileImage->getClientOriginalName();
         //FILE NAME WITHOUT EXTENSION
         $filename = pathinfo($imageName, PATHINFO_FILENAME);
         $i = 1;
         //ADD A NUMBER IF FILE EXISTS
         while(Storage::disk('public')->exists('teams/'.$imageName)) {
           $imageName = $filename.'_'.$i.'.'.$extension;
           $i++;
         }
         Storage::disk('public')->putFileAs('teams', $fileImage, $imageName);
         $teams = Team::create([
           'name' => $this->name,
           'last_name' =>$this->last_name,
           'photo' => $imageName,
           'description' => $this->description,
           'title' => $this->title
         ]);
       }
}
