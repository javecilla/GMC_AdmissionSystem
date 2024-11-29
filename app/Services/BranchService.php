<?php

namespace App\Services;

use Illuminate\Support\Facades\Cache;

use App\Models\Branch;

class BranchService {
	public function getAll() {
		return Cache::remember('branches', now()->addDay(), function () {
		    return Branch::orderBy('id', 'desc')->get();
		});
	}

	public function getBy(string $category) {
		return Cache::remember('branches_by_category', now()->addDay(), function () use ($category) {
		    return Branch::orderBy('id', 'desc')->where('campus_category', $category)->get();
		});
	}

}