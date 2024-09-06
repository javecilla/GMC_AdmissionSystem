jQuery(document).ready(function() {
	// toastr config style
	toastr.options = {
	  "debug": false,
	  "rtl": false,
	  "newestOnTop": false,
	  "preventDuplicates": false,
	  "progressBar": true,
	 	"showDuration": "300",
    "hideDuration": "1000",
	  "timeOut": 2000,
	  "extendedTimeOut": 0,
	  "closeButton": true,
	  "closeMethod": 'fadeOut',
	  "closeEasing": 'swing',
	  "hideEasing": "linear",
	  "showMethod": "fadeIn",
    "hideMethod": "fadeOut",
	 	"positionClass": 'toast-bottom-right',
	};

	// -------School Year List
		const schoolYear = [
			'2010-2011', '2011-2012', '2012-2013', '2013-2014', '2014-2015',
			'2015-2016', '2016-2017', '2017-2018', '2018-2019', '2019-2020',
			'2020-2021', '2021-2022', '2022-2023', '2023-2024', '2024-2025',
		];
		const schoolYearField = $('.schoolYearField');

		var optionHtml = `
			<select name="schoolYear" id="schoolYear" class="form-select schoolYear">
				<option value="" selected>-- SELECT --</option>
		`;
		// loop each school year list
		for(let list of schoolYear.reverse()) {
			optionHtml += `
				<option value="${list}">
					${list}
				</option>
			`;
		}
		optionHtml += `
			</select>
			<div class="invalid-feedback schoolYearInvalid"></div>
		`;
		//append this data to container
		schoolYearField.append(optionHtml);

	// -------Track Strand List
	const strandList = [
		'Accountancy, Business and Management',
		'General Academic Strand',
		'Humanities and Social Sciences',
		'Science, Technology Engineering and Mathematics',
		'Technical-Vocational-Livelihood Home Economics',
		'Technical-Vocational-Livelihood Information and Communications Technology'
	];

	const trackOrStrandsField = $('.trackOrStrandsField');

	var optionStrandHtml = `
		<select name="strandList" id="strandList" class="form-select strandList">
			<option value="" selected>-- SELECT --</option>
	`;
	for(let strand of strandList) {
		optionStrandHtml += `
			<option value="${strand}">${strand}</option>
		`;
	}
	optionStrandHtml += `
		</select>
		<div class="invalid-feedback strandListInvalid"></div>
	`;
	//append this data to container
	trackOrStrandsField.append(optionStrandHtml);

	// ask confirmation to the user if they want to reload the page
  $(window).on('beforeunload', function(e) {
    e.preventDefault();
    e.returnValue = "Are you sure you want to reload this page? Your unsaved data may be lost.";
  });

	// To retain the gender selected and age if incase the page is reload
	$(window).on('load', function() {
  	$('.genderRadio').each(function() {
	    if (isEqual($(this).val(), $('#genderSelected').val())) {
	      $(this).prop('checked', true);
	    } else {
	      $(this).prop('checked', false);
	    }
  	});

  	$('.document-checkbox').each(function() {
    const targetId = $(this).data('target');
    const hiddenInputValue = $('#' + targetId).val();
    if (hiddenInputValue && hiddenInputValue !== "") {
      $(this).prop('checked', true);
    } else {
      $(this).prop('checked', false);
    }
  });

  	handleAgeCalculation($('.birthday'));
	});

	// ------------------------ form helper event listener for step 1
	$('#gradeLevel').on('change', function() {
		$(this).removeClass('is-invalid');
		$('.gradeLevelInvalid').text("");
	});

	$('#schoolYear').on('change', function() {
		$(this).removeClass('is-invalid');
		$('.schoolYearInvalid').text("");
	});

	$('#semester').on('change', function() {
		$(this).removeClass('is-invalid');
		$('.semesterInvalid').text("");
	});

	$('#branchCampus').on('change', function() {
		$(this).removeClass('is-invalid');
		$('.branchCampusInvalid').text("");
	});

	$('#strandList').on('change', function() {
		$(this).removeClass('is-invalid');
		$('.strandListInvalid').text("");
	});

	$('#LRN').on('input', function() {
		//check if the length input of lrn if reach max 12 then it
		//will no longer accept any input | send error message
		const MAX_LENGTH = 12;
		if($(this).val().length < MAX_LENGTH || $(this).val().length > MAX_LENGTH) {
			$(this).addClass('is-invalid');
			$('.LRNInvalid').text('Invalid LRN! Please enter a valid LRN.');
		} else {
			$(this).removeClass('is-invalid');
			$('.LRNInvalid').text("");
		}
	});
	// ------------------------ end form helper event listener for step 1

	// ------------------------ form helper event listener for step 2
	$('#lastName').on('input', function() {
		$(this).removeClass('is-invalid');
		$('.lastNameInvalid').text("");
	});

	$('#firstName').on('input', function() {
		$(this).removeClass('is-invalid');
		$('.firstNameInvalid').text("");
	});

	// Gender selection
	$('.genderRadio').on('click', function() {
		$('.gender').removeClass('is-invalid');
		$('.genderInvalid').text("");

    const selectedValue = $(this).val();
    $(this).prop('checked', false); // Uncheck all radios
    $(this).prop('checked', true); // Check the selected radio
    $('#genderSelected').val(selectedValue); // Set the value to the hidden input
	});



	//birthday derived with applicant age
	$('.birthday').on('change', function() {
		$(this).removeClass('is-invalid');
		$('.birthdayInvalid').text("");
		$('.ageGroup').removeClass('d-none');
		handleAgeCalculation($(this));
	});

	$('#placeOfBirth').on('input', function() {
		$(this).removeClass('is-invalid');
		$('.placeOfBirthInvalid').text("");
	});

	$('#nationality').on('input', function() {
		$(this).removeClass('is-invalid');
		$('.nationalityInvalid').text("");
	});

	$('#religion').on('input', function() {
		$(this).removeClass('is-invalid');
		$('.religionInvalid').text("");
	});
	// ------------------------ end form helper event listener for step 2

	// ------------------------ form helper event listener for step 3
	$('#address').on('input', function() {
		$(this).removeClass('is-invalid');
		$('.addressInvalid').text("");
	});

	$('#baranggay').on('input', function() {
		$(this).removeClass('is-invalid');
		$('.baranggayInvalid').text("");
	});

	$('#municipality').on('input', function() {
		$(this).removeClass('is-invalid');
		$('.municipalityInvalid').text("");
	});

	$('#region').on('input', function() {
		$(this).removeClass('is-invalid');
		$('.regionInvalid').text("");
	});

	$('#contactno').on('input', function() {
		const MAX_LENGTH = 11;
		if($(this).val().length < MAX_LENGTH || $(this).val().length > MAX_LENGTH) {
			$(this).addClass('is-invalid');
			$('.contactnoInvalid').text('Invalid Contact no! Please enter a valid contact no.');
		} else {
			$(this).removeClass('is-invalid');
			$('.contactnoInvalid').text("");
		}
	});

	$('#email').on('input', function() {
		$(this).removeClass('is-invalid');
		$('.emailInvalid').text("");
	});

	$('#fathersFullName').on('input', function() {
		$(this).removeClass('is-invalid');
		$('.fathersFullNameInvalid').text("");
	});

	$('#mothersFullName').on('input', function() {
		$(this).removeClass('is-invalid');
		$('.mothersFullNameInvalid').text("");
	});

	$('#guardiansFullName').on('input', function() {
		$(this).removeClass('is-invalid');
		$('.guardiansFullNameInvalid').text("");
	});

	$('#guardiansContactNo').on('input', function() {
		//check if the length input of contact number is reach max 11 then it
		//will no longer accept any input | send error message
		const MAX_LENGTH = 11;
		if($(this).val().length < MAX_LENGTH || $(this).val().length > MAX_LENGTH) {
			$(this).addClass('is-invalid');
			$('.guardiansContactNoInvalid').text('Invalid Contact no! Please enter a valid contact no.');
		} else {
			$(this).removeClass('is-invalid');
			$('.guardiansContactNoInvalid').text("");
		}
	});

	$('#guardiansRelationship').on('change, input', function() {
		$(this).removeClass('is-invalid');
		$('.guardiansRelationshipInvalid').text("");
	});

	$('#guardiansAddress').on('input', function() {
		$(this).removeClass('is-invalid');
		$('.guardiansAddressInvalid').text("");
	});

	$('#referralContactNo').on('input', function() {
		//check if the length input of contact number is reach max 11 then it
		//will no longer accept any input | send error message
		const MAX_LENGTH = 11;
		if($(this).val().length < MAX_LENGTH || $(this).val().length > MAX_LENGTH) {
			$(this).addClass('is-invalid');
			$('.referralContactNoInvalid').text('Invalid Contact no! Please enter a valid contact no.');
		} else {
			$(this).removeClass('is-invalid');
			$('.referralContactNoInvalid').text("");
		}
	});
	// ------------------------ end form helper event listener for step 3

	// ------------------------form helper event listener for step 4
	$('#completionDate').on('change', function() {
		$(this).removeClass('is-invalid');
		$('.completionDateInvalid').text("");
	});

	$('#formerSchoolName').on('input', function() {
		$(this).removeClass('is-invalid');
		$('.formerSchoolNameInvalid').text("");
	});

	$('#completerAs').on('change, input', function() {
		$(this).removeClass('is-invalid');
		$('.completerAsInvalid').text("");
	});

	$('#formerSchoolAddress').on('input', function() {
		$(this).removeClass('is-invalid');
		$('.formerSchoolAddressInvalid').text("");
	});

	$('.document-checkbox').on('click', function() {
		const targetId = $(this).data('target');
		const value = $(this).is(':checked') ? 'Ok' : 'N/A';
		$(`#${targetId}`).val(value);
	});
});