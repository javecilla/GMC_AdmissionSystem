(function($) {
	"use strict";

	function loadSchoolYear() {
		SETTINGS.getSchoolYearsAll().then(function(schoolYears) {
			let schoolYearField = `<select name="schoolYear" id="schoolYear" class="form-select schoolYear">
				<option value="" selected>-- SELECT --</option>`;

			schoolYears.forEach(function(i) {
				schoolYearField += `<option value="${i.name}">${i.name}</option>`;
			});

			schoolYearField += `</select>
				<div class="invalid-feedback schoolYearInvalid"></div>
			`;

			$('.schoolYearField').html(schoolYearField);

			$('#schoolYear').on('change', function() {
				$(this).removeClass('is-invalid');
				$('.schoolYearInvalid').text("");
			});
		}).catch(function(e) {
			console.error(e);
			toastr.error("An error occured! Failed to load school years.");
		});
	}
	function loadSemesters() {
		SETTINGS.getSemestersBy('GMC').then(function(semesters) {
			let semesterField = `<select name="semester" id="semester" class="form-select semester">
				<option value="" selected>-- SELECT --</option>`;

			semesters.forEach(function(i) {
				semesterField += `<option value="${i.short_name}">${i.short_name}</option>`;
			});

			semesterField += `</select>
				<div class="invalid-feedback semesterInvalid"></div>
			`;

			$('.semesterField').html(semesterField);

			$('#semester').on('change', function() {
				$(this).removeClass('is-invalid');
				$('.semesterInvalid').text("");
			});
		}).catch(function(e) {
			console.error(e);
			toastr.error("An error occured! Failed to load semesters.");
		});
	}
	function loadBranches() {
		SETTINGS.getBranchesBy('GMC').then(function(branches) {
			let branchField = `<select name="branch" id="branch" class="form-select branch">
				<option value="" selected>-- SELECT --</option>`;

			branches.forEach(function(i) {
				branchField += `<option value="${i.name}">${i.name}</option>`;
			});

			branchField += `</select>
				<div class="invalid-feedback branchInvalid"></div>
			`;

			$('.branchField').html(branchField);

			$('#branch').on('change', function() {
				$(this).removeClass('is-invalid');
				$('.branchInvalid').text("");
			});
		}).catch(function(e) {
			console.error(e);
			toastr.error("An error occured! Failed to load branches.");
		});
	}
	function loadYearLevels() {
		SETTINGS.getYearLevelsBy('GMC').then(function(yearLevels) {
			let yearLevelField = `<select name="yearLevel" id="yearLevel" class="form-select yearLevel">
				<option value="" selected>-- SELECT --</option>`;

			yearLevels.forEach(function(i) {
				yearLevelField += `<option value="${i.name}">${i.name}</option>`;
			});

			yearLevelField += `</select>
				<div class="invalid-feedback yearLevelInvalid"></div>
			`;

			$('.yearLevelField').html(yearLevelField);

			$('#yearLevel').on('change', function() {
				$(this).removeClass('is-invalid');
				$('.yearLevelInvalid').text("");
			});
		}).catch(function(e) {
			console.error(e);
			toastr.error("An error occured! Failed to load year levels.");
		});
	}
	function loadStrands() {
		SETTINGS.getStrandsAll().then(function(strands) {
			let strandField = `<select name="strand" id="strand" class="form-select strand">
				<option value="" selected>-- SELECT --</option>`;

			strands.forEach(function(i) {
				strandField += `<option value="${i.name}">${i.name}</option>`;
			});

			strandField += `</select>
				<div class="invalid-feedback strandInvalid"></div>
			`;

			$('.strandField').html(strandField);

			$('#strand').on('change', function() {
				$(this).removeClass('is-invalid');
				$('.strandInvalid').text("");
			});
		}).catch(function(e) {
			console.error(e);
			toastr.error("An error occured! Failed to load strands.");
		});
	}

	function __init__() {
		Promise.all([
	    loadSchoolYear(),
	    loadSemesters(),
	    loadBranches(),
	    loadYearLevels(),
	    loadStrands()
		]).then(function() {
			$('#submitRegistrationFormBtn').removeAttr('disabled').text('Register');

			$('.lastName').on('input', function() {
				$(this).removeClass('is-invalid');
				$('.lastNameInvalid').text("");
			});

			$('.firstName').on('input', function() {
				$(this).removeClass('is-invalid');
				$('.firstNameInvalid').text("");
			});

			$('.gender').on('change', function() {
				$(this).removeClass('is-invalid');
				$('.genderInvalid').text("");
			});

			$('.email').on('input', function() {
				$(this).removeClass('is-invalid');
				$('.emailInvalid').text("");
			});

			$('.contactNo').on('input', function() {
				$(this).removeClass('is-invalid');
				$('.contactNoInvalid').text("");
			});

			function validateForm(data) {
				let isFormValid = true;

				if(isEmpty(data.google_recaptcha)) {
					toastr.error("Recaptcha is required! Please check the recaptcha.");
					isFormValid = false;
				}

				if(isEmpty(data.school_year)) {
					$('.schoolYear').addClass('is-invalid');
					$('.schoolYearInvalid').text("This field is required! Please select school year.");
					isFormValid = false;
				}

				if(isEmpty(data.semester)) {
					$('.semester').addClass('is-invalid');
					$('.semesterInvalid').text("This field is required! Please select semester.");
					isFormValid = false;
				}

				if(isEmpty(data.branch)) {
					$('.branch').addClass('is-invalid');
					$('.branchInvalid').text("This field is required! Please select branch.");
					isFormValid = false;
				}

				if(isEmpty(data.year_level)) {
					$('.yearLevel').addClass('is-invalid');
					$('.yearLevelInvalid').text("This field is required! Please select year level.");
					isFormValid = false;
				}

				if(isEmpty(data.strand)) {
					$('.strand').addClass('is-invalid');
					$('.strandInvalid').text("This field is required! Please select strand.");
					isFormValid = false;
				}

				if(isEmpty(data.school_name)) {
					$('.previousSchoolName').addClass('is-invalid');
					$('.previousSchoolNameInvalid').text("This field is required! Please enter your previous school name.");
					isFormValid = false;
				}

				if(isEmpty(data.first_name)) {
					$('.firstName').addClass('is-invalid');
					$('.firstNameInvalid').text("This field is required! Please enter your first name.");
					isFormValid = false;
				}

				if(isEmpty(data.last_name)) {
					$('.lastName').addClass('is-invalid');
					$('.lastNameInvalid').text("This field is required! Please enter your last name.");
					isFormValid = false;
				}

				if(isEmpty(data.gender)) {
					$('.gender').addClass('is-invalid');
					$('.genderInvalid').text("This field is required! Please select your gender.");
					isFormValid = false;
				}

				if(isEmpty(data.email)) {
					$('.email').addClass('is-invalid');
					$('.emailInvalid').text("This field is required! Please enter your email.");
					isFormValid = false;
				}
				if(!isValidEmail(data.email)) {
					$('.email').addClass('is-invalid');
					$('.emailInvalid').text("This field is required! Please enter a valid email.");
					isFormValid = false;
				}

				if(isEmpty(data.contact_no)) {
					$('.contactNo').addClass('is-invalid');
					$('.contactNoInvalid').text("This field is required! Please enter your contact number.");
					isFormValid = false;
				}

				return isFormValid;
			}

		  $(document).on('submit', '#registrationForm', function(e) {
				e.preventDefault();
				$('#g-recaptcha-response').val(grecaptcha.getResponse());

				const formData = {
					'google_recaptcha': $('#g-recaptcha-response').val(),
					'school_year': $('#schoolYear').val(),
    			'semester': $('#semester').val(),
    			'branch': $('#branch').val(),
					'year_level': $('#yearLevel').val(),
					'strand': $('#strand').val(),
					'lrn': $('#LRN').val(),
					'school_name': $('#previousSchoolName').val(),
					'completion_date': $('#yearGraduated').val(),
					'first_name': $('#firstName').val(),
					'last_name': $('#lastName').val(),
					'extension_name': $('#extensionName').val(),
					'middle_name': $('#middleName').val(),
					'gender': $('#gender').val(),
					'email': $('#email').val(),
					'contact_no': $('#contactNo').val()
				};

				const validated = validateForm(formData);
				if(validated) {
					const submitForm = Swal.mixin({
					  customClass: {
					    confirmButton: "btn btn-light next_button",
					    cancelButton: "btn btn-light back_button",
					    showLoaderOnConfirm: "swal2-loader"
					  },
		  			buttonsStyling: false
					});

					submitForm.fire({
				    title: "Verify Your Application",
				   	html: "<small>Before proceeding, kindly review your application to ensure the accuracy and validity of the provided information. Please note that submitting inaccurate or falsified details may disqualify your application for admission to Golden Minds Colleges.<br/><br/>Are you certain that the information provided is accurate and truthful?</small>",
				    imageUrl: "/favicon.png",
					  imageWidth: 140,
					  imageHeight: 140,
					  imageAlt: "School-Logo",
				    showCancelButton: true,
				    cancelButtonText: "Cancel",
				    showConfirmButton: true,
				   	confirmButtonText: "Confirm Application",
				    confirmButtonColor: "#b4813f",
				    showLoaderOnConfirm: true,
				    allowEscapeKey : false,
				    allowOutsideClick: false,
				    preConfirm: function(response) {
				      if(!response) {
				        return false;
				      } else {
				        return new Promise(function(resolve) {
				          setTimeout(function () {
				          	//console.table(formData);
				            STUDENT.register(formData).then(function(response) {
											if(response.success) {
												submitForm.fire({
								          title: '',
								          title: `${response.message}`,
											   	html: `<small>Please note that the appointment schedule has been sent to the email address <strong>${response.applicantEmail}</strong>. Kindly review your appointment details to complete the submission of your credentials to the school.<br/><br/> Thank you for submitting your application.<br/>-GMC Office of the Admissions and Online Services</small>`,
											    imageUrl: "/favicon.png",
												  imageWidth: 140,
												  imageHeight: 140,
												  imageAlt: "School-Logo",
											    showConfirmButton: true,
											   	confirmButtonText: "Okay",
											    confirmButtonColor: "#b4813f",
								        }).then(function(result){
								        	if(result.isConfirmed) {
								        		submitForm.close();
								        	}
								        	//$('#registrationForm')[0].reset();
								        });
											} else {
						        		toastr.error(response.message);
						        		submitForm.close();
											}

											grecaptcha.reset();
										}).catch(function(e) {
											console.error(e);
										});
				          }, 1000); //end set timeout
				        }); // end promise
				      } // end else for checking response
				    }, // end preconfirm
				    allowOutsideClick: function() {
				    	!submitForm.isLoading()
				    }
		  		}); //end swal
				}
			});
		}).catch(function(e) {
		    toastr.error("Something went wrong! Please try again later.");
		});
	}

	__init__();
})(jQuery)