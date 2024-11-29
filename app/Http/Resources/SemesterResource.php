<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class SemesterResource extends JsonResource {
	public function toArray(Request $request) {
		return [
			'id' => $this->semester_no,
			'short_name' => $this->semester,
			'full_name' => $this->semester_name,
			'campus_category' => $this->campus_category,
		];
	}
}