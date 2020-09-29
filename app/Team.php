<?php

namespace App;

use App\Queries\QueryFilter;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Team extends Model
{
	use SoftDeletes;

	/**
   * The attributes that are mass assignable.
   *
   * @var array
   */

	protected $fillable = [
    'name', 'last_name', 'description', 'title', 'photo', 'order'
  ];

	/**
   * Route to the team's photo.
   *
   * @return image
   */
	public function getUrlPhotoAttribute()
  {
    return 'storage/teams/'.$this->photo;
  }

  public function scopeFilterBy($query, QueryFilter $filters, array $data)
  {
  	return $filters->applyTo($query, $data);
  }
}
