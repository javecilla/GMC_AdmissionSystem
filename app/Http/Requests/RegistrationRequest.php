<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegistrationRequest extends FormRequest {

  public function authorize(): bool {
    return true;
  }

  public function rules(): array {
    return [
      'google_recaptcha' => 'nullable|string',
      'email' => 'nullable|email',
      'username' => 'nullable|string',
      'reg_date' => 'nullable|date',
      'sy' => 'nullable|string',
      'semester' => 'nullable|string',
      'school' => 'nullable|string',
      'school_id' => 'nullable|string',
      'shs_pno' => 'nullable|string',
      'strand' => 'nullable|string',
      'yr_sec' => 'nullable|string',
      'lrn' => 'nullable|string',
      'last_name' => 'nullable|string',
      'first_name' => 'nullable|string',
      'extension_name' => 'nullable|string',
      'middle_name' => 'nullable|string',
      'gender' => 'nullable|string',
      'birthday' => 'nullable|date',
      'age' => 'nullable|integer',
      'birthplace' => 'nullable|string',
      'nationality' => 'nullable|string',
      'religion' => 'nullable|string',
      'completion_date' => 'nullable|date',
      'completer_as' => 'nullable|string',
      'school_name' => 'nullable|string',
      'school_address' => 'nullable|string',
      'gen_ave' => 'nullable|integer',
      'house_no' => 'nullable|string',
      'brgy' => 'nullable|string',
      'city' => 'nullable|string',
      'province' => 'nullable|string',
      'contact_no' => 'nullable|string',
      'fathers_name' => 'nullable|string',
      'foccupation' => 'nullable|string',
      'mothers_name' => 'nullable|string',
      'moccupation' => 'nullable|string',
      'guardian_name' => 'nullable|string',
      'relationship' => 'nullable|string',
      'gcontact_no' => 'nullable|string',
      'goccupation' => 'nullable|string',
      'guardian_address' => 'nullable|string',
      'referral_name' => 'nullable|string',
      'referral_number' => 'nullable|string',
      'grade10_adviser' => 'nullable|string',
      'grade10_section' => 'nullable|string',
      'good_moral' => 'nullable|boolean',
      'card' => 'nullable|boolean',
      'f137' => 'nullable|boolean',
      'psa_remarks' => 'nullable|string',
      'stud_id' => 'nullable|string',
      'pe_shirt' => 'nullable|string',
      'waiver' => 'nullable|string',
      'uniform' => 'nullable|string',
      'allowance' => 'nullable|string',
      'document_filed' => 'nullable|string',
      'tuition_status' => 'nullable|string',
      'learning_mode' => 'nullable|string',
      'entry_qualification' => 'nullable|string',
      'enrollment_status' => 'nullable|string',
    ];
  }
}
