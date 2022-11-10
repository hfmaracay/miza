<?php

namespace App\Models;

use Bouncer;
use App\Queries\QueryFilter;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Silber\Bouncer\Database\HasRolesAndAbilities;

class User extends Authenticatable
{
  use Notifiable, HasRolesAndAbilities, SoftDeletes, HasFactory;

  /**
   * The attributes that are mass assignable.
   *
   * @var array
   */
  protected $fillable = [
    'name', 'email', 'password',
  ];

  /**
   * The attributes that should be hidden for arrays.
   *
   * @var array
   */
  protected $hidden = [
    'password', 'remember_token',
  ];

  /**
   * The attributes that should be cast to native types.
   *
   * @var array
   */
  protected $casts = [
    'email_verified_at' => 'datetime',
  ];

  /**
   * Determinar si es Admin.
   */
  public function isAdmin() {
    return $this->isAn('admin');
  }

  /**
   * Atributo Role.
   */
  public function getRoleAttribute() {
    if($this->isAn('admin')) {
      return 'Admin';
    } else {
      return 'User';
    }
  }

  public function scopeFilterBy($query, QueryFilter $filters, array $data)
  {
  	return $filters->applyTo($query, $data);
  }
}
