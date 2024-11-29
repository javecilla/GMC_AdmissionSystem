<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class SchoolYearResource extends JsonResource {
	public function toArray(Request $request) {
		return [
			'id' => $this->sy_no,
			'name' => $this->sy,
		];
	}
}