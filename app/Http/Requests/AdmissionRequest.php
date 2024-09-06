<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AdmissionRequest extends FormRequest {
	/**
	 * Determine if the user is authorized to make this request.
	 */
	public function authorize(): bool {
		return true;
	}

	/**
	 * Get the validation rules that apply to the request.
	 *
	 * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
	 */
	public function rules(): array {
		return [
			'g-recaptcha-response' => 'required',
			// step 1: Applying For
			'gradeLevel' => 'required|string',
			'schoolYear' => 'required|string',
			'semester' => 'required|string',
			'branchCampus' => 'required|string',
			'strandList' => 'required|string',
			'LRN' => 'required',
			// step 2: Personal Information
			'lastName' => 'required|string',
			'firstName' => 'required|string',
			'genderSelected' => 'required|string',
			'birthday' => 'required|string',
			'age' => 'required|string',
			'placeOfBirth' => 'required|string',
			'nationality' => 'required|string',
			'religion' => 'required|string',
			// step 3: Address and Contact Details
			'address' => 'required|string',
			'baranggay' => 'required|string',
			'municipality' => 'required|string',
			'region' => 'required|string',
			'contactno' => 'required',
			'email' => 'required|email',
			'fathersFullName' => 'required|string',
			'mothersFullName' => 'required|string',
			'guardiansFullName' => 'required|string',
			'guardiansContactNo' => 'required',
			'guardiansRelationship' => 'required|string',
			'guardiansAddress' => 'required|string',
			// step 4: Address and Contact Details
			'completionDate' => 'required|string',
			'completerAs' => 'required|string',
			'formerSchoolName' => 'required|string',
			'formerSchoolAddress' => 'required|string',
		];
	}
}
