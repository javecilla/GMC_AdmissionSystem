<?php

namespace App\Services;

use Illuminate\Support\Facades\Cache;

use App\Models\Strand;

class StrandService {
	public function getAll() {
		return Cache::remember('strands', now()->addDay(), function () {
		    return Strand::orderBy('id', 'asc')->get();
		});
	}

}