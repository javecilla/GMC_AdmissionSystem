const SETTINGS = {
	getSchoolYearsAll: function() {
		return ajaxRequest('GET', `${BASE_URL}/api/school-years`, null, {}, HEADERS);
	},
	getSemestersBy: function(category) {
		return ajaxRequest('GET', `${BASE_URL}/api/semesters/campus-category/${category}`, null, {}, HEADERS);
	},
	getBranchesBy: function(category) {
		return ajaxRequest('GET', `${BASE_URL}/api/branches/campus-category/${category}`, null, {}, HEADERS);
	},
	getYearLevelsBy: function(category) {
		return ajaxRequest('GET', `${BASE_URL}/api/year-levels/campus-category/${category}`, null, {}, HEADERS);
	},
	getStrandsAll: function() {
		return ajaxRequest('GET', `${BASE_URL}/api/strands`, null, {}, HEADERS);
	}
};

const STUDENT = {
	register: function(formData) {
		return ajaxRequest('POST', `${BASE_URL}/api/student/register`, formData, {}, false);
	}
};