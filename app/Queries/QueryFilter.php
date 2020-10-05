<?php

namespace App\Queries;

use Illuminate\Support\Facades\Validator;

abstract class QueryFilter
{
	protected $valid;

	abstract public function rules(): array;

	public function applyTo($query, array $filters) {
		$rules = $this->rules();

    $filters = array_intersect_key($filters, $rules);  // Elimina los filtros que no existen en las reglas de validacion

    $validator = Validator::make($filters, $rules);

    $this->valid = $validator->valid();

		foreach($this->valid as $nameFunction => $value) {
			$method = $nameFunction;

			if(method_exists($this, $method)) {
				$this->$method($query, $value);
			} else {
				$query->where($nameFunction, $value);
			}
		}
    
		return $query;
	}

	public function valid() {
		return $this->valid;
	}
}