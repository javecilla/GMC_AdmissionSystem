<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Carbon;

use App\Http\Controllers\Controller;
use App\Http\Requests\RegistrationRequest;
use App\Services\StudentService;
use App\Services\RecaptchaService;
use App\Services\EmailService;
use App\Exceptions\FailedSubmitApplicationException;
use App\Exceptions\FailedSendAppointmentException;
use App\Exceptions\InvalidRecaptchaException;
use App\Enums\EnrollmentStatus;
use App\Utilities\Transform;

class StudentController extends Controller {
	public function __construct(
    protected StudentService $studentService,
    protected RecaptchaService $recaptchaService,
    protected EmailService $emailService
  ) {}

	public function register(RegistrationRequest $request) {
		try {
			//verify the recaptcha
			$verified = $this->recaptchaService->verify($request->input('google_recaptcha'));
			if($verified) {
				//compact all data submitted by applicant
				$applicantData = [
					'google_recaptcha' => $request->input('google_recaptcha'),
		      'email' => $request->input('email'),
		      'username' => $request->input('username') ?? '',
		      'reg_date' => now()->toDateString(), //Carbon::now()->format('Y-m-d');
		      'sy' => $request->input('school_year'),
		      'semester' => $request->input('semester'),
		      'school' => $request->input('branch'),
		      'school_id' => $request->input('branch_id') ?? '',
		      'shs_pno' => $request->input('shs_pno') ?? '',
		      'strand' => $request->input('strand'),
		      //11 ICT-Pending
		      'yr_sec' => trim(
		      	Transform::getStrandAcronym($request->input('strand')) . ' ' .
		      	$request->input('year_level') . '-' .
						EnrollmentStatus::map()[EnrollmentStatus::PENDING]
		      ),
		      'lrn' => $request->input('lrn') ?? '',
		      'last_name' => $request->input('last_name'),
		      'first_name' => $request->input('first_name'),
		      'extension_name' => $request->input('extension_name') ?? '',
		      'middle_name' => $request->input('middle_name') ?? '',
		      //full name of the applicant e.g., Avecilla Jerome Jr. S.
		      'learners_name' => trim(
		        $request->input('last_name') . ' ' .
		        $request->input('first_name') . ' ' .
		        ($request->input('extension_name') ?? '') . ' ' .
		        ($request->input('middle_name') ?? '')
			    ),
		      'gender' => $request->input('gender'),
		      'birthday' => (!empty($request->input('birthday'))) ? $request->input('birthday') : now()->toDateString(),
		      'age' => $request->input('age') ?? 0,
		      'birthplace' => $request->input('birthplace') ?? '',
		      'nationality' => $request->input('nationality') ?? '',
		      'religion' => $request->input('religion') ?? '',
		      'completion_date' => $request->input('completion_date') ?? now()->toDateString(),
		      'completer_as' => $request->input('completer_as') ?? '',
		      'school_name' => $request->input('school_name'),
		      'school_address' => $request->input('school_address') ?? '',
		      'gen_ave' => $request->input('gen_ave') ?? 0,
		      'house_no' => $request->input('house_no') ?? '',
		      'brgy' => $request->input('brgy') ?? '',
		      'city' => $request->input('city') ?? '',
		      'province' => $request->input('province') ?? '',
		      'contact_no' => $request->input('contact_no'),
		      'fathers_name' => $request->input('fathers_name') ?? '',
		      'foccupation' => $request->input('foccupation') ?? '',
		      'mothers_name' => $request->input('mothers_name') ?? '',
		      'moccupation' => $request->input('moccupation') ?? '',
		      'guardian_name' => $request->input('guardian_name') ?? '',
		      'relationship' => $request->input('relationship') ?? '',
		      'gcontact_no' => $request->input('gcontact_no') ?? '',
		      'goccupation' => $request->input('goccupation') ?? '',
		      'guardian_address' => $request->input('guardian_address') ?? '',
		      'referral_name' => $request->input('referral_name') ?? '',
		      'referral_number' => $request->input('referral_number') ?? '',
		      'grade10_adviser' => $request->input('grade10_adviser') ?? '',
		      'grade10_section' => $request->input('grade10_section') ?? '',
		      'good_moral' => $request->input('good_moral') ?? '',
		      'card' => $request->input('card') ?? '',
		      'f137' => $request->input('f137') ?? '',
		      'psa_remarks' => $request->input('psa_remarks') ?? '',
		      'stud_id' => $request->input('stud_id') ?? '',
		      'pe_shirt' => $request->input('pe_shirt') ?? '',
		      'waiver' => $request->input('waiver') ?? '',
		      'uniform' => $request->input('uniform') ?? '',
		      'allowance' => $request->input('allowance') ?? '',
		      'document_filed' => $request->input('document_filed') ?? '',
		      'tuition_status' => $request->input('tuition_status') ?? '',
		      'learning_mode' => $request->input('learning_mode') ?? '',
		      'entry_qualification' => $request->input('entry_qualification') ?? '',
		      //as default of the application enrollment status of student is pending
		      'enrollment_status' => EnrollmentStatus::map()[EnrollmentStatus::PENDING],
		      //'created_at' => now(),
		      //'update_at' => null,
				];


				//inserting the cleaned data into the database => Remove specific fields from the array
				$this->studentService->register(Arr::except($applicantData, ['google_recaptcha', 'email', 'created_at', 'updated_at']));

				//send email for applicant appoinment schedule
				$sended = $this->emailService->sendAppointmentSchedule($applicantData);
				if($sended) {
					return Response::json([
						'success' => true,
						'message' => 'Your Application Submitted Successfully!',
						'applicantEmail' => $applicantData['email']
					]);
				}
			}
		} catch (InvalidRecaptchaException $e) {
			return Response::json(['success' => false, 'message' => $e->getMessage()]);
		} catch (FailedSubmitApplicationException $e) {
			return Response::json(['success' => false, 'message' => $e->getMessage()]);
		} catch (FailedSendAppointmentException $e) {
			return Response::json(['success' => false, 'message' => $e->getMessage()]);
		} catch (\Exception $e) {
			\Log::error('Error in registration: ' . $e->getMessage());
    	\Log::error('Trace:', ['trace' => $e->getTraceAsString()]);
      return Response::json(['success' => false, 'message' => 'An unexpected error occurred. Please try again.']);
		}
	}

}