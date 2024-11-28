//enable and configure toastr alert
toastr.options = {
    "debug": false,
    "rtl": false,
    "newestOnTop": false,
    "preventDuplicates": false,
    "progressBar": true,
    "showDuration": "500",
    "hideDuration": "2500",
    "timeOut": 5000,
    "extendedTimeOut": 0,
    "closeButton": true,
    "closeMethod": 'fadeOut',
    "closeEasing": 'swing',
    "hideEasing": "linear",
    "showMethod": "fadeIn",
    "hideMethod": "fadeOut",
    "positionClass": 'toast-bottom-left',
};


//enable popovers
const popoverTriggerList = $('[data-bs-toggle="popover"]');
const popoverList = [...popoverTriggerList].map(popoverTriggerEl => new bootstrap.Popover(popoverTriggerEl));