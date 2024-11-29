<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model {
	//use HasFactory;

	protected $table = 'student_information';
	protected $primaryKey = 'student_no ';

	public $timestamps = false; // Disable automatic timestamps

	//Specify the field column in database table 'student_information' that is fillable
	protected $fillable = [
		'username',
		'reg_date',
		'sy',
		'semester',
		'school',
		'school_id',
		'shs_pno',
		'strand',
		'yr_sec',
		'lrn',
		'learners_name',
		'last_name',
		'extension_name',
		'first_name',
		'middle_name',
		'gender',
		'birthday',
		'age',
		'birthplace',
		'nationality',
		'religion',
		'completion_date',
		'completer_as',
		'school_name',
		'school_address',
		'gen_ave',
		'house_no',
		'brgy',
		'city',
		'province',
		'contact_no',
		'fathers_name',
		'foccupation',
		'mothers_name',
		'moccupation',
		'guardian_name',
		'relationship',
		'gcontact_no',
		'goccupation',
		'guardian_address',
		'referral_name',
		'referral_number',
		'grade10_adviser',
		'grade10_section',
		'good_moral',
		'card',
		'f137',
		'psa',
		'psa_remarks',
		'stud_id',
		'pe_shirt',
		'waiver',
		'uniform',
		'allowance',
		'document_filed',
		'tuition_status',
		'learning_mode',
		'entry_qualification',
    'enrollment_status',
		//'created_at',
		//'updated_at',
	];

}
