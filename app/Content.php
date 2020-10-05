<?php

namespace App;

use App\Queries\QueryFilter;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Content extends Model
{
	use SoftDeletes;

  /**
   * The attributes that are mass assignable.
   *
   * @var array
   */
  protected $fillable = [
    'name', 'description'
  ];

  public function scopeFilterBy($query, QueryFilter $filters, array $data) {
    return $filters->applyTo($query, $data);
  }
}
