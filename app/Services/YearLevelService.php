<?php

namespace App\Services;

use Illuminate\Support\Facades\Cache;

use App\Models\YearLevel;

class YearLevelService {
	public function getAll() {
		return Cache::remember('year_levels', now()->addDay(), function () {
		    return YearLevel::orderBy('id', 'asc')->get();
		});
	}

	public function getBy(string $category) {
		return Cache::remember('year_levels_by_category', now()->addDay(), function () use ($category) {
		    return YearLevel::orderBy('id', 'asc')->where('campus_category', $category)->get();
		});
	}

}