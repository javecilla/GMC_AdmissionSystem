<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
	/**
	 * Run the migrations.
	 */
	public function up(): void {
		Schema::create('student_information', function (Blueprint $table) {
			$table->id('student_no');
			$table->string('username')->nullable(); //not required
			$table->date('reg_date');
			$table->string('sy');
			$table->string('semester');
			$table->string('school');
			$table->string('school_id')->nullable(); //not required
			$table->string('shs_pno')->nullable(); //not required
			$table->string('strand');
			$table->string('yr_sec')->nullable();
			$table->string('lrn');
			$table->string('learners_name'); //full name
			$table->string('last_name');
			$table->string('extension_name')->nullable();
			$table->string('first_name');
			$table->string('middle_name')->nullable();
			$table->string('gender');
			$table->date('birthday');
			$table->integer('age');
			$table->text('birthplace');
			$table->string('nationality');
			$table->string('religion');
			$table->date('completion_date');
			$table->string('completer_as');
			$table->string('school_name');
			$table->text('school_address');
			$table->integer('gen_ave')->nullable(); //not required
			$table->string('house_no');
			$table->string('brgy');
			$table->string('city');
			$table->string('province');
			$table->string('contact_no');
			$table->string('fathers_name');
			$table->string('foccupation')->nullable();
			$table->string('mothers_name');
			$table->string('moccupation')->nullable();
			$table->string('guardian_name');
			$table->string('relationship');
			$table->string('gcontact_no');
			$table->string('goccupation')->nullable();
			$table->text('guardian_address');
			$table->string('referral_name')->nullable();
			$table->string('referral_number')->nullable();
			$table->string('grade10_adviser')->nullable();
			$table->string('grade10_section')->nullable();
			$table->string('good_moral')->nullable();
			$table->string('card')->nullable();
			$table->string('f137')->nullable();
			$table->string('psa')->nullable();
			$table->string('psa_remarks')->nullable();
			$table->string('stud_id')->nullable();
			$table->string('pe_shirt')->nullable();
			$table->string('waiver')->nullable();
			$table->string('uniform')->nullable();
			$table->string('allowance')->nullable();
			$table->string('document_filed')->nullable();
			$table->string('school_year')->nullable();
			$table->string('year_section')->nullable(); //not required
			$table->string('email');
			$table->timestamps();
		});
	}

	/**
	 * Reverse the migrations.
	 */
	public function down(): void {
		Schema::dropIfExists('student_information');
	}
};
