<?php

namespace App\Queries;

use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;

class UserFilter extends QueryFilter
{
	public function rules(): array
	{
		return [
			'search' => 'filled',
      'from' => 'date_format:d/m/Y',
      'to' => 'date_format:d/m/Y',
      'role' => ['filled', Rule::exists('bouncer_roles', 'id')]
		];
	}

  public function search($query, $search)
  {
		if(empty($search)) {
			return $query;
		}

		return $query->where('name', 'like', "%{$search}%")
				 				 ->orWhere('email', 'like', "%{$search}%");
	}

	public function from($query, $date)
  {
  	$date = Carbon::createFromFormat('d/m/Y', $date);

    return $query->whereDate('created_at', '>=', $date);
  }

  public function to($query, $date)
  {
  	if(empty($date)) {
			return $this;
		}

    $date = Carbon::createFromFormat('d/m/Y', $date);

    return $query->whereDate('created_at', '<=', $date);
  }
}