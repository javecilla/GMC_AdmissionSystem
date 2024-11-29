<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class BranchResource extends JsonResource {
	public function toArray(Request $request) {
		return [
			'id' => $this->id,
			'name' => $this->name,
			'acronym' => $this->acronym,
			'campus_category' => $this->campus_category,
		];
	}
}