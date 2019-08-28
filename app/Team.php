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
	'name',
	'last_name',
	'description',
	'photo'];

	/**
   * Route to the team's photos.
   *
   * @return image
   */

	public function getUrlImageAttribute()
  {
    return 'storage/teams/'.$this->image;
  }


  public function scopeFilterBy($query, QueryFilter $filters, array $data) {
  	return $filters->applyTo($query, $data);
  }
}
