<?php

namespace App\Services;

use App\Exceptions\FailedSubmitApplicationException;
use App\Models\Admission;
use Illuminate\Support\Facades\DB;

class AdmissionService {
	public function storeApplicationSHS(array $data) {
		return DB::transaction(function () use ($data) {
			$submitApplication = Admission::create($data);
			if (!$submitApplication) {
				//check submission if not success
				// Throw exception with message and status 422(Unprocessable Entity)
				throw new FailedSubmitApplicationException("Failed to submit the application. Please try again.", 422);
			}
			return ['success' => true];
		});
	}
}