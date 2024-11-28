(function($) {
	"use strict";

	$(document).on('submit', '#registrationForm', function(e) {
		e.preventDefault();

		toastr.warning("Something went wrong! Please try again.");
	});

})(jQuery)