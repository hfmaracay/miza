<?php

namespace App;

use App\Queries\QueryFilter;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class News extends Model
{
	use SoftDeletes;
  
  /**
   * The table associated with the model.
   *
   * @var string
   */
  protected $table = 'news';
  
  /**
   * The attributes that are mass assignable.
   *
   * @var array
   */
  protected $fillable = [
    'name', 'description', 'image'
  ];

  public function getUrlImageAttribute()
  {
    return 'storage/news/'.$this->image;
  }

	public function scopeFilterBy($query, QueryFilter $filters, array $data) {
    return $filters->applyTo($query, $data);
  }
}
