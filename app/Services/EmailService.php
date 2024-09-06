<?php

namespace App\Services;

use App\Exceptions\FailedSendAppointmentException;
use App\Mail\AppointmentSchedule;
use Illuminate\Support\Facades\Mail;

class EmailService {
	private $registedSchedule = [
		'December 18, 2023 (Monday) - 10:00 AM to 4:00 PM',
		'December 19, 2023 (Tuesday) - 8:00 AM to 3:00 PM',
		'December 20, 2023 (Wednesday) - 10:00 AM to 4:00 PM',
		'December 21, 2023 (Tuesday) - 8:30 AM to 3:30 PM',
		'December 22, 2023 (Friday) - 7:30 AM to 5:30 PM',
		'December 23, 2023 (Saturday) - 8:00 AM to 4:30 PM',
	];

	public function sendAppointmentSchedule(array $data) {
		// send appointment schedule randomly base on the schedule registered in array
		$randomIndex = array_rand($this->registedSchedule);
		$appointmentSchedule = $this->registedSchedule[$randomIndex];
		$data['schedule'] = $appointmentSchedule;
		// specify who email to be send the appointment schedule
		$result = Mail::to($data['email'])->send(new AppointmentSchedule($data));
		//check the sending process if success or not
		if (!$result) {
			throw new FailedSendAppointmentException('Failed to send appointment', 422);
		}
		//return success response to the client side
		return [
			'success' => true,
			'message' => 'Your Application Submitted Successfully!',
			'applicantEmail' => $data['email'],
		];
	}
}