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
            'description' => 'required|string',
            'image' => 'nullable|image',
            'title' => 'required|string'
        ];
    }
    public function messages()
    {
        return[
            'name.required' => 'Nombre requerido',
            'last_name.required' => 'Apellido requerido',
            'description.required' => 'Descripción obligatoria',
            'image.image' => 'Imagen inválida',
            'title.required' => 'Cargo requerido'];
    }
    public function updateTeam(Team $team)
    // {
    //     $old_image = $team->image;
    //     $image->fill([
    //         'name' => $this->name,
    //         'last_name' => $this->last_name,
    //         'description' => $this->description,
    //         'title' => $this->title]);

    //     if($this->hasFile('image'))
    //     {
    //         $fileImage = $this->file('image');
    //         $path = $fileImage->path();
    //         $extension = $fileImage->extension();
    //         $imageName = $fileImage->getClientOriginalName();
    //         Storage::disk('public')
    //             ->putFileAs('teams/', $fileImage, $imageName);
    //         if (Storage::disk('public')->exists('teams/' . $old_image))
    //         {
    //             Storage::disk('public')->delete('teams/' . $old_image);
    //         }
    //         $team->image = $imageName;
    //     }
    //     $team->save();
    // }
    {
        $old_image = $team->image;
        $team->fill([
            'name' => $this->name,
            'last_name' => $this->last_name,
            'description' => $this->description,
            'title' => $this->title]);
        if ($this->hasFile('image'))
        {
            $fileImage = $this->file('image');
            $path = $fileImage->path();
            $extension = $fileImage->extension();
            $imageName = $fileImage->getClientOriginalName();
            Storage::disk('public')
                ->putFileAs('teams/', $fileImage, $imageName);
            if (Storage::disk('public')->exists('teams/' . $old_image))
            {
                Storage::disk('public')->delete('teams/' . $old_image);
            }
            $team->image = $imageName;
        }
        $team->save();
    }
}
