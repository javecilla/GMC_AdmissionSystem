const ajaxRequest = function(method, url, data = null, headers = {}, isImageUpload = false) {
  // Get the CSRF token from a meta tag or hidden input (you can also store it in a variable)
  const csrfToken = $('meta[name="csrf-token"]').attr('content') || '';

  // Set CSRF token in the headers
  headers['X-CSRF-Token'] = csrfToken;

  return new Promise(function(resolve, reject) {
    const ajaxOptions = {
      method: method,
      url: url,
      headers: { ...headers },
      success: function(result) {
        resolve(result);
      },
      error: function(xhr, status, error) {
        try {
          const response = JSON.parse(xhr.responseText);
          console.error(`Error: ${status}, ${error}`);
          reject(response.message || 'An error occurred. Please try again.');
        } catch(e) {
          console.log(e);
          console.error(`Error parsing response: ${e}`);
          reject('An error occurred. Please try again.');
        }
      }
    };

    if (isImageUpload) {
      // Specific settings for image uploads
      ajaxOptions.data = data;  // Assuming data is FormData
      ajaxOptions.processData = false;
      ajaxOptions.contentType = false;
    } else {
      // For non-image requests
      ajaxOptions.data = data;
      ajaxOptions.dataType = 'json';
    }

    $.ajax(ajaxOptions);
  });
};

const debounce = function(func, delay) {
  let timeoutId;
  return function(...args) {
    if(timeoutId) {
      clearTimeout(timeoutId);
    }
    timeoutId = setTimeout(function() {
      func.apply(this, args);
    }, delay);
  };
}

// Utility function to escape HTML
const escapeHtml = function(unsafe) {
  return unsafe
    .replace(/&/g, "&amp;")
    .replace(/</g, "&lt;")
    .replace(/>/g, "&gt;")
    .replace(/"/g, "&quot;")
    .replace(/'/g, "&#039;");
};

const formatDateTime = function(dateTimeString) {
  // Create a Date object from the input string
  const date = new Date(dateTimeString);
  // Define month names
  const monthNames = [
    "January", "February", "March", "April", "May", "June",
    "July", "August", "September", "October", "November", "December"
  ];
  // Extract date components
  const month = monthNames[date.getMonth()];
  const day = date.getDate();
  const year = date.getFullYear();
  // Extract time components
  let hours = date.getHours();
  const minutes = date.getMinutes();
  const ampm = hours >= 12 ? 'PM' : 'AM';
  // Convert to 12-hour format
  hours = hours % 12;
  hours = hours ? hours : 12; // the hour '0' should be '12'
  // Format minutes to have two digits
  const minutesFormatted = minutes < 10 ? '0' + minutes : minutes;
  // Format the final string
  const formattedDateTime = `${month} ${day}, ${year} - ${hours}:${minutesFormatted} ${ampm}`;

  return formattedDateTime;
}

const formatReadableDate = function(date) {
  const options = { year: 'numeric', month: 'long', day: 'numeric' };
  return new Date(date).toLocaleDateString('en-US', options);
};

const addURLParams = function(paramName, paramValue) {
	//push url param without page reloading
  const url = new URL(window.location);
  url.searchParams.set(paramName, paramValue);
  window.history.pushState({ path: url.href }, '', url.href);
};

const removeURLParams = function(paramName) {
	//remove the search param from the URL
  const url = new URL(window.location);
  url.searchParams.delete(paramName);
  window.history.pushState({ path: url.href }, '', url.href);
};

const getURLParams = function(paramName) {
  const url = new URL(window.location);
  return url.searchParams.get(paramName);
};

const createDecoyURL = function(symbol = '', mention, urlName) {
  // Build the new URL with the hash, excluding the current file (dashboard.php)
  let newUrl = '/' + symbol + '' + mention.toLowerCase() + '/' + urlName.toLowerCase();
  // Update the URL without reloading the page
  history.replaceState(null, null, newUrl.trim());
};

const updateHash = function(content) {
  window.location.hash = content;
};

const updatePageTitle = function(titleName) {
  const formattedTitle = titleName
    .split(' ') // Split by spaces
    .map(word => word.charAt(0).toUpperCase() + word.slice(1).toLowerCase()) // Capitalize each word
    .join(' '); // Join back with spaces

  $('title[id="page-title"]').text(`GMSIMS | ${formattedTitle}`);
};



const generateRandomNumber = function(length) {
  let randomNumber = '';
  for (let i = 0; i < length; i++) {
      randomNumber += Math.floor(Math.random() * 10);
  }
  return randomNumber;
};

const generatePassword = function(length = 12) {
  const charset = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789!@#$%^&*()_+[]{}|;:,.<>?";
  let password = "";
  for (let i = 0; i < length; i++) {
      const randomIndex = Math.floor(Math.random() * charset.length);
      password += charset[randomIndex];
  }
  return password;
};


//=======================================//

const isEmpty = function(field) {
	return field === "";
};
const isNull = function(field) {
	return field === null;
};

const isValidEmail = function(email) {
  const emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
  return emailPattern.test(email);
};


const disabledButton = function(elementId) {
	$(elementId).css('cursor', 'no-drop').prop('disabled', true);
};

const enableButton = function(elementId) {
	$(elementId).css('cursor', 'pointer').prop('disabled', false);
};

const openModal = function(modalId) {
	$(modalId).attr('data-backdrop', 'static').modal('show');
};

const closeModal = function(modalId) {
	$(modalId).modal('hide');
};

const runSpinner = function() {
	$('.loading-spinner').show();
  $('.arrow-icon').hide();
};

const stopSpinner = function() {
	$('.loading-spinner').hide();
  $('.arrow-icon').show();
};
