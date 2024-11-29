<?php
namespace App\Services;

use App\Exceptions\FailedSendAppointmentException;
use App\Mail\AppointmentSchedule;
use Illuminate\Support\Facades\Mail;
use Carbon\Carbon;

class EmailService {

  private function generateWeekdaySchedules(Carbon $startDate, Carbon $endDate, array $timeSlots): array {
    $schedules = [];

    // Clone the start date to avoid modifying the original
    $currentDate = $startDate->copy();

    // Continue until we reach or exceed the end date
    while($currentDate->lte($endDate)) {
      // Skip Sundays
      if($currentDate->dayOfWeek !== Carbon::SUNDAY) {
        //Randomly select a time slot for the day
        $timeSlot = $timeSlots[array_rand($timeSlots)];

        // Format the schedule string
        $scheduleString = sprintf(
          '%s (%s) - %s',
          $currentDate->format('F j, Y'),
          $currentDate->format('l'),
          $timeSlot
        );
        //December 11, 2024 (Wednesday) - 9:00 AM to 2:00 PM

        $schedules[] = $scheduleString;
      }

      // Move to the next day
      $currentDate->addDay();
  	}

  	return $schedules;
  }

  //Predefined time slots for appointments
  private function getTimeSlots(): array {
    return [
      '7:30 AM to 5:30 PM',
      '8:00 AM to 3:00 PM',
      '8:30 AM to 3:30 PM',
      '10:00 AM to 4:00 PM',
      '9:00 AM to 2:00 PM'
    ];
  }

  //Get registered schedules
  private function getRegisteredSchedules(): array {
    // Define the date range for schedules (e.g., next 2 weeks)
    $startDate = Carbon::now()->startOfDay();
    $endDate = $startDate->copy()->addWeeks(2)->endOfDay();

    // Generate schedules
    return $this->generateWeekdaySchedules(
      $startDate,
      $endDate,
      $this->getTimeSlots()
    );
  }

  public function sendAppointmentSchedule(array $data) {
    // Get registered schedules
    $registedSchedule = $this->getRegisteredSchedules();

    // Select a random schedule
    $randomIndex = array_rand($registedSchedule);
    $appointmentSchedule = $registedSchedule[$randomIndex];

    // Add schedule to data
    $data['schedule'] = $appointmentSchedule;

    // Send email
    try {
      $result = Mail::to($data['email'])->send(new AppointmentSchedule($data));

      // Check if email was sent successfully
      if(!$result) {
        throw new FailedSendAppointmentException('Failed to send student appointment schedule.', 422);
      }

      return true;
    } catch (\Exception $e) {
      throw new FailedSendAppointmentException($e->getMessage(), 422);
    }
  }
}