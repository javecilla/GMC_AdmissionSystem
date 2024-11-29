<?php

namespace App\Services;

use App\Exceptions\FailedSubmitApplicationException;
use App\Models\Student;
use Illuminate\Support\Facades\DB;

class StudentService {
	public function register(array $data) {
		return DB::transaction(function () use ($data) {
			$submitApplication = Student::create($data);
			if(!$submitApplication) {
				//check submission if not success
				throw new FailedSubmitApplicationException("Failed to process the registration. Please try again.", 422);
			}

			return true;
		});
	}
}