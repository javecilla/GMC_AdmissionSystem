<?php

namespace App\Services;

use Illuminate\Support\Facades\Cache;

use App\Models\Semester;

class SemesterService {
	public function getAll() {
		return Cache::remember('semesters', now()->addDay(), function () {
		    return Semester::orderBy('semester_no', 'asc')->get();
		});
	}

	public function getBy(string $category) {
		return Cache::remember('semesters_by_category', now()->addDay(), function () use ($category) {
		    return Semester::orderBy('semester_no', 'asc')->where('campus_category', $category)->get();
		});
	}

}