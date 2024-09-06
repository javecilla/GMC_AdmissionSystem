// Functions that track the  form steps
function updateProgressBar(step) {
	// Update progress bar steps here
  $('#progressbar li').removeClass('active');
  for (let i = 1; i <= step; i++) {
    $(`#progressbar li:nth-child(${i})`).addClass('active');
  }

  // Smoothly transition between form steps
  $(`.form-step[data-step="${step}"]`).fadeIn();
  $(`.form-step[data-step]:not([data-step="${step}"])`).hide();
}

// Function to retrieve form data from step 1
function retrieveFormDataFromStep1() {
  return {
  	'registrationDate': getCurrentDate(),
    'gradeLevel': $('#gradeLevel').val(),
    'schoolYear': $('#schoolYear').val(),
    'semester': $('#semester').val(),
    'branchCampus': $('#branchCampus').val(),
    'strandList': $('#strandList').val(),
    'LRN': $('#LRN').val()
  };
}

// Functions to validate form step 1
function validateFormStep1(data) {
	let isFormValid = true;
	//start checking if the field is empty or not
	if(isEmpty(data.gradeLevel)) {
		$('.gradeLevel').addClass('is-invalid');
		$('.gradeLevelInvalid').text("This field is required! Please select grade level.");
		isFormValid = false;
	}

	if(isEmpty(data.schoolYear)) {
		$('.schoolYear').addClass('is-invalid');
		$('.schoolYearInvalid').text("This field is required! Please select school year.");
		isFormValid = false;
	}

	if(isEmpty(data.semester)) {
		$('.semester').addClass('is-invalid');
		$('.semesterInvalid').text("This field is required! Please select the semester.");
		isFormValid = false;
	}

	if(isEmpty(data.branchCampus)) {
		$('.branchCampus').addClass('is-invalid');
		$('.branchCampusInvalid').text("This field is required! Please select the campus.");
		isFormValid = false;
	}

	if(isEmpty(data.strandList)) {
		$('.strandList').addClass('is-invalid');
		$('.strandListInvalid').text("This field is required! Please select your strand.");
		isFormValid = false;
	}

	if(isEmpty(data.LRN)) {
		$('.LRN').addClass('is-invalid');
		$('.LRNInvalid').text("This field is required! Please enter your lrn.");
		isFormValid = false;
	}

	return isFormValid;
}

//--------------End step 1

//-------------- step 2
// Function to retrieve form data from step 2
function retrieveFormDataFromStep2() {
	return {
    'lastName': $('#lastName').val(),
    'firstName': $('#firstName').val(),
    'extensionName': $('#extensionName').val(),
    'middleName': $('#middleName').val(),
    'genderSelected': $('#genderSelected').val(),
    'birthday': $('#birthday').val(),
    'age': $('#age').text(),
    'placeOfBirth': $('#placeOfBirth').val(),
    'nationality': $('#nationality').val(),
    'religion': $('#religion').val()
  };
}

// Functions to validate form step 2
function validateFormStep2(data) {
	let isFormValid = true;
	//start checking if the field is empty or not
	if(isEmpty(data.lastName)) {
		$('.lastName').addClass('is-invalid');
		$('.lastNameInvalid').text("This field is required! Please enter your last name.");
		isFormValid = false;
	}

	if(isEmpty(data.lastName)) {
		$('.firstName').addClass('is-invalid');
		$('.firstNameInvalid').text("This field is required! Please enter your first name.");
		isFormValid = false;
	}

	if(isEmpty(data.genderSelected)) {
		$('.gender').addClass('is-invalid');
		$('.genderInvalid').text("This field is required! Please select your gender.");
		isFormValid = false;
	}

	if(isEmpty(data.birthday)) {
		$('.birthday').addClass('is-invalid');
		$('.birthdayInvalid').text("This field is required! Please select your birthday.");
		$('.ageGroup').addClass('d-none');
		isFormValid = false;
	}

	if(isEmpty(data.placeOfBirth)) {
		$('.placeOfBirth').addClass('is-invalid');
		$('.placeOfBirthInvalid').text("This field is required! Please enter your place of birth.");
		isFormValid = false;
	}

	if(isEmpty(data.nationality)) {
		$('.nationality').addClass('is-invalid');
		$('.nationalityInvalid').text("This field is required! Please enter your nationality.");
		isFormValid = false;
	}

	if(isEmpty(data.religion)) {
		$('.religion').addClass('is-invalid');
		$('.religionInvalid').text("This field is required! Please enter your religion.");
		isFormValid = false;
	}

	return isFormValid;
}

//--------------End step 2

//-------------- step 3
// Function to retrieve form data from step 3
function retrieveFormDataFromStep3() {
	return {
    'address': $('#address').val(),
    'baranggay': $('#baranggay').val(),
    'municipality': $('#municipality').val(),
    'region': $('#region').val(),
    'contactno': $('#contactno').val(),
    'email': $('#email').val(),
    'fathersFullName': $('#fathersFullName').val(),
    'fathersOccupation': $('#fathersOccupation').val(),
    'mothersFullName': $('#mothersFullName').val(),
    'mothersOccupation': $('#mothersOccupation').val(),
    'guardiansFullName': $('#guardiansFullName').val(),
    'guardiansOccupation': $('#guardiansOccupation').val(),
    'guardiansContactNo': $('#guardiansContactNo').val(),
    'guardiansRelationship': $('#guardiansRelationship').val(),
    'guardiansAddress': $('#guardiansAddress').val(),
    'referralFullName': $('#referralFullName').val(),
    'referralContactNo': $('#referralContactNo').val()
  };
}

// Functions to validate form step 3
function validateFormStep3(data) {
	let isFormValid = true;
	//start checking if the field is empty or not
	if(isEmpty(data.address)) {
		$('.address').addClass('is-invalid');
		$('.addressInvalid').text("This field is required! Please enter your address.");
		isFormValid = false;
	}

	if(isEmpty(data.baranggay)) {
		$('.baranggay').addClass('is-invalid');
		$('.baranggayInvalid').text("This field is required! Please enter your baranggay.");
		isFormValid = false;
	}

	if(isEmpty(data.municipality)) {
		$('.municipality').addClass('is-invalid');
		$('.municipalityInvalid').text("This field is required! Please enter your municipality.");
		isFormValid = false;
	}

	if(isEmpty(data.region)) {
		$('.region').addClass('is-invalid');
		$('.regionInvalid').text("This field is required! Please enter your region.");
		isFormValid = false;
	}

	if(isEmpty(data.contactno)) {
		$('.contactno').addClass('is-invalid');
		$('.contactnoInvalid').text("This field is required! Please enter your region.");
		isFormValid = false;
	}

	if(isEmpty(data.email)) {
		$('.email').addClass('is-invalid');
		$('.emailInvalid').text("This field is required! Please enter your email.");
		isFormValid = false;
	} else {
		const isValidEmail = validateEmail(data.email);
		if(!isValidEmail) {
			$('.email').addClass('is-invalid');
			$('.emailInvalid').text("Invalid email address! Please enter a valid email address.");
			isFormValid = false;
		}
	}

	if(isEmpty(data.fathersFullName)) {
		$('.fathersFullName').addClass('is-invalid');
		$('.fathersFullNameInvalid').text("This field is required! Please enter your father's name.");
		isFormValid = false;
	}

	if(isEmpty(data.mothersFullName)) {
		$('.mothersFullName').addClass('is-invalid');
		$('.mothersFullNameInvalid').text("This field is required! Please enter your mother's name.");
		isFormValid = false;
	}

	if(isEmpty(data.guardiansFullName)) {
		$('.guardiansFullName').addClass('is-invalid');
		$('.guardiansFullNameInvalid').text("This field is required! Please enter your guardian's name.");
		isFormValid = false;
	}

	if(isEmpty(data.guardiansContactNo)) {
		$('.guardiansContactNo').addClass('is-invalid');
		$('.guardiansContactNoInvalid').text("This field is required! Please enter your guardian's contact no.");
		isFormValid = false;
	}

	if(isEmpty(data.guardiansRelationship)) {
		$('.guardiansRelationship').addClass('is-invalid');
		$('.guardiansRelationshipInvalid').text("This field is required! Please enter your relationship to your guardian's name.");
		isFormValid = false;
	}

	if(isEmpty(data.guardiansAddress)) {
		$('.guardiansAddress').addClass('is-invalid');
		$('.guardiansAddressInvalid').text("This field is required! Please enter the address of your guardian's name.");
		isFormValid = false;
	}

	return isFormValid;
}
//--------------End step 3

//-------------step 4
// Function to retrieve form data from step 4
function retrieveFormDataFromStep4() {
	return {
    'completionDate': $('#completionDate').val(),
    'completerAs': $('#completerAs').val(),
    'formerSchoolName': $('#formerSchoolName').val(),
    'formerSchoolAddress': $('#formerSchoolAddress').val(),
    'formerAdviserName': $('#formerAdviserName').val(),
    'formerSection': $('#formerSection').val(),
    'psa': $('#psa').val(),
    'form137': $('#form137').val(),
    'card': $('#card').val(),
    'goodMoral': $('#goodMoral').val(),
    'Id': $('#Id').val(),
    'peShirt': $('#peShirt').val(),
    'waiver': $('#waiver').val(),
    'uniform': $('#uniform').val(),
    'allowance': $('#allowance').val(),
    'documentFiled': $('#documentFiled').val(),
    'g-recaptcha-response': $('#g-recaptcha-response').val(),
    'g-recaptcha-key': $('meta[name="grecaptcha-key"]').attr('content')
  };
}

// Functions to validate form step 4
function validateFormStep4(data) {
	let isFormValid = true;
	//start checking if the field is empty or not
	if(isEmpty(data.completionDate)) {
		$('.completionDate').addClass('is-invalid');
		$('.completionDateInvalid').text("This field is required! Please enter the date you graduated.");
		isFormValid = false;
	}

	if(isEmpty(data.completerAs)) {
		$('.completerAs').addClass('is-invalid');
		$('.completerAsInvalid').text("This field is required! Please enter what type completer are you.");
		isFormValid = false;
	}

	if(isEmpty(data.completerAs)) {
		$('.completerAs').addClass('is-invalid');
		$('.completerAsInvalid').text("This field is required! Please enter what type completer are you.");
		isFormValid = false;
	}

	if(isEmpty(data.formerSchoolName)) {
		$('.formerSchoolName').addClass('is-invalid');
		$('.formerSchoolNameInvalid').text("This field is required! Please enter your former school name.");
		isFormValid = false;
	}

	if(isEmpty(data.formerSchoolAddress)) {
		$('.formerSchoolAddress').addClass('is-invalid');
		$('.formerSchoolAddressInvalid').text("This field is required! Please enter your former school address.");
		isFormValid = false;
	}

	return isFormValid;
}

//--------------End step 4

// Function to populate form fields from stored data
function populateFieldsFromStoredData(number) {
  const storedData = localStorage.getItem(`step${number}Data`);
  if (storedData) {
    const parsedData = JSON.parse(storedData);
    Object.keys(parsedData).forEach(key => {
      $(`#${key}`).val(parsedData[key]);
    });
  }
}

// Function to compact all data stored on local storage
function combineLocalStorageData() {
  const allData = {};

  // Iterate through the localStorage keys for steps 1 to 4
  for (let count = 1; count <= 4; count++) {
    const storedData = localStorage.getItem(`step${count}Data`);
    if (storedData) {
      const parsedData = JSON.parse(storedData);
      Object.assign(allData, parsedData);
    }
  }

  return allData;
}


// Functions to handle form navigation between steps
function showStep(step) {
	const mode = $(`.form-step[data-step="${step}"]`).data('mode');
  $('.form-step').hide();
  $(`.form-step[data-step="${step}"]`).show();
  // Update the form header title based on the form mode
  $('.form_mode_title').text(mode.replace(/-/g, ' '));
  // Update URL without page reload
  const url = new URL(window.location.href);
  url.searchParams.set('step', step);
  url.searchParams.set('form_mode', mode);
  history.pushState(null, '', url);
}

// Functions that check field if empty
function isEmpty(field) {
	return field === "";
}

// Function to check if two value is equal
function isEqual(inputOne, inputTwo) {
	return inputOne === inputTwo;
}

// Functions to validate email
function validateEmail(email) {
  const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
  return emailRegex.test(email);
}

// Function to calculate age based on birthday
function calculateAge(birthDate) {
  const currentDate = new Date();
  const diffInMilliseconds = currentDate - birthDate;
  const ageInMilliseconds = new Date(diffInMilliseconds);

  return Math.abs(ageInMilliseconds.getUTCFullYear() - 1970);
}

function getCurrentDate() {
	const currentDate = new Date();

	const year = currentDate.getFullYear();
	const month = String(currentDate.getMonth() + 1).padStart(2, '0');
	const day = String(currentDate.getDate()).padStart(2, '0');
	const formattedDate = `${year}/${month}/${day}`;
	return formattedDate;
}

// Function to handle age calculation and update when birthday changes
function handleAgeCalculation(birthdayInput) {
  const birthDate = new Date(birthdayInput.val());
  const age = calculateAge(birthDate);
  $('.age').text(isNaN(age) ? '0' : age);
}
