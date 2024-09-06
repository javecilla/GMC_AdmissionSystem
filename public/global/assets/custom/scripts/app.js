// Ensure the DOM is fully loaded before executing the script
jQuery(document).ready(function() {
	// Retain input data if the page is reloaded
	populateFieldsFromStoredData(1);
	populateFieldsFromStoredData(2);
	populateFieldsFromStoredData(3);
	populateFieldsFromStoredData(4);

	// Default on load page step
	showStep(1);
	updateProgressBar(1);

	// Flags to indicate successful completion of each form step
	let step1Completed = false;
	let step2Completed = false;
	let step3Completed = false;
	
	// ============= FIRST STEP FORM REGISTRATION =============
	$(document).on('click', '#firstStepBtn', function(e) {
		e.preventDefault();
		const dataForm1 = retrieveFormDataFromStep1();
		let validationResultStep1 = validateFormStep1(dataForm1);
		if (validationResultStep1) {
			// Store form data for step 1 in local storage
			localStorage.setItem('step1Data', JSON.stringify(dataForm1));
			showStep(2); // Display step 2
			updateProgressBar(2); // Update progress bar
			step1Completed = true; // Mark step 1 as completed
		}
	});

	$(document).on('click', '#backToFirstStepBtn', function() {
		// Display step 1 when back button is clicked
		populateFieldsFromStoredData(1);
		showStep(1);
		updateProgressBar(1);
	});
	// ============= END FIRST STEP FORM REGISTRATION =============

	// ============= SECOND STEP FORM REGISTRATION =============
	$(document).on('click', '#secondStepBtn', function(e) {
		e.preventDefault();
		if (!step1Completed) {
			Swal.fire({
				title: '',
				title: `Oppss! Warning`,
				html: `<small>Please complete Step 1 before proceeding.`,
				imageUrl: "/favicon.png",	
				imageWidth: 140,	
				imageHeight: 140,	
				imageAlt: "School-Logo",
				showConfirmButton: true,
				confirmButtonText: "Okay",
				confirmButtonColor: "#b4813f",
			}).then((result) => {
				return (result.isConfirm) ? true : false;
			});
		}
		const dataForm2 = retrieveFormDataFromStep2();
		let validationResultStep2 = validateFormStep2(dataForm2);
		if (validationResultStep2) {
			localStorage.setItem('step2Data', JSON.stringify(dataForm2));
			showStep(3); // Display step 3
			updateProgressBar(3);
			step2Completed = true; // Mark step 2 as completed
		}
	});

	$(document).on('click', '#backToSecondStep', function() {
		populateFieldsFromStoredData(2);
		showStep(2);
		updateProgressBar(2);
	});
	// ============= END SECOND STEP FORM REGISTRATION =============

	// ============= THIRD STEP FORM REGISTRATION =============
	$(document).on('click', '#thirdStepBtn', function(e) {
		e.preventDefault();
		if (!step2Completed) {
			Swal.fire({
				title: '',
				title: `Oppss! Warning`,
				html: `<small>Please complete Step 2 before proceeding.`,
				imageUrl: "/favicon.png",	
				imageWidth: 140,	
				imageHeight: 140,	
				imageAlt: "School-Logo",
				showConfirmButton: true,
				confirmButtonText: "Okay",
				confirmButtonColor: "#b4813f",
			}).then((result) => {
				return (result.isConfirm) ? true : false;
			});
		}
		const dataForm3 = retrieveFormDataFromStep3();
		let validationResultStep3 = validateFormStep3(dataForm3);
		if (validationResultStep3) {
			localStorage.setItem('step3Data', JSON.stringify(dataForm3));
			showStep(4); // Display step 4
			updateProgressBar(4);
			step3Completed = true; // Mark step 3 as completed
		}
	});

	$(document).on('click', '#backToThirdStep', function() {
		populateFieldsFromStoredData(3);
		showStep(3);
		updateProgressBar(3);
	});
	// ============= END THIRD STEP FORM REGISTRATION =============

	// ============= SUBMIT THE APPLICATION FORM =============
	$(document).on('submit', '#seniorHighForm', function(e) {
		e.preventDefault();
		if (!step3Completed) {
			Swal.fire({
				title: '',
				title: `Oppss! Warning`,
				html: `<small>Please complete Step 3 before proceeding.`,
				imageUrl: "/favicon.png",	
				imageWidth: 140,	
				imageHeight: 140,	
				imageAlt: "School-Logo",
				showConfirmButton: true,
				confirmButtonText: "Okay",
				confirmButtonColor: "#b4813f",
			}).then((result) => {
				return (result.isConfirm) ? true : false;
			});
		}
		// Perform validation before submitting the form
		const dataForm4 = retrieveFormDataFromStep4();
		let validationResultStep4 = validateFormStep4(dataForm4);
		if (validationResultStep4) {
			// Set reCAPTCHA response value before form submission
      $('#g-recaptcha-response').val(grecaptcha.getResponse());
			// Store the step4Data to local storage
			localStorage.setItem('step4Data', JSON.stringify(dataForm4));
			// Combined data from all steps in local storage
			const combinedData = combineLocalStorageData();
			const CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
			// Logic to send data to the server for storage
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
		    preConfirm: (response) => { 
		      if(!response) {
		        return false;
		      } else {
		        return new Promise(function(resolve) { 
		          setTimeout(function () { 
		            //console.table(combinedData);
		            $.ajax({
		            	method: 'POST',
		            	url: '/senior-high-school/registration/store',
		            	data: combinedData,
		            	dataType: 'json',
					        headers: {
										'X-CSRF-TOKEN': CSRF_TOKEN
					        },
					        success: function(response) {
					        	//console.log('Data being sent to server:', combinedData);
					        	console.log(response.message);
					        	//check server response
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
							        }).then((result) => {
							        	grecaptcha.reset(); // Reinitialize recaptcha widget
							        	localStorage.clear(); // Clear all stored data in localStorage
							        	// then redirect to index page
							        	window.location.href='http://admission.goldenminds.edu.test/';
							        });
					        	} else {
					        		toastr.error(response.message);
					        		grecaptcha.reset(); // Reinitialize recaptcha widget
					        		submitForm.close();
					        	}
					        },
					        error: function(xhr, status, error) {
    								const response = JSON.parse(xhr.responseText);
								    // Check if 'errors' exist in the response and has 'message' property
								    if (response.errors && response.errors['g-recaptcha-response']) {
								        const errorMessage = response.errors['g-recaptcha-response'][0];
								        toastr.error(errorMessage);
								    } else {
								    	toastr.error('Something went wrong! Please try again.');
								    }
						        grecaptcha.reset();
						        submitForm.close();
					        }
		            }); //end ajax
		           }, 1000); //end set timeout
		        }); // end promise
		      } // end else for checking response
		    }, // end preconfirm
		    allowOutsideClick: () => !submitForm.isLoading()
		  }); //end swal
		} //end if checking validation result4
	}); // ============= END SUBMIT THE APPLICATION FORM =============
});