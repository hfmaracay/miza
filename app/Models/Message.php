<?php

namespace App\Models;

use App\Queries\QueryFilter;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Message extends Model
{
  use SoftDeletes, HasFactory;

  /**
   * The attributes that are mass assignable.
   *
   * @var array
   */
  protected $fillable = [
    'name', 'email', 'description'
  ];

  public function scopeFilterBy($query, QueryFilter $filters, array $data) {
    return $filters->applyTo($query, $data);
  }
}
