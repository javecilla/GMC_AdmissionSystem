<?php

namespace App\Services;

use Illuminate\Support\Facades\Cache;

use App\Models\SchoolYear;

class SchoolYearService {
	public function getAll() {
		return Cache::remember('school_years', now()->addDay(), function () {
		    return SchoolYear::orderBy('sy_no', 'desc')->get();
		});
	}
}