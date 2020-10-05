<?php
namespace App\Http\Requests\News;

use App\News;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Storage;

class AdminCreateNewsRequest extends FormRequest
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
      'description' => 'required|string',
      'image' => 'required|image'
    ];
  }

  public function messages()
  {
    return [
      'name.required' => 'Nombre requerido',
      'description.required' => 'Descripción requerida',
      'image.required' => 'Imagen requerida',
      'image.image' => 'Imagen inválida'
    ];
  }

  public function createNews() 
  {
    $fileImage = $this->file('image');
    $path = $fileImage->path();
    $extension = $fileImage->extension();
    $imageName = $fileImage->getClientOriginalName();
    $filename = pathinfo($imageName, PATHINFO_FILENAME);  // FILE NAME WITHOUT EXTENSION

    // ADD A NUMBER IF FILE EXISTS
    $i = 1;
    while(Storage::disk('public')->exists('news/'.$imageName)) {
      $imageName = $filename.'_'.$i.'.'.$extension;
      $i++;
    }
    Storage::disk('public')->putFileAs('news', $fileImage, $imageName);

    $news = News::create([
      'name' => $this->name,
      'description' => $this->description,
      'image' => $imageName,
    ]);
  }
}
