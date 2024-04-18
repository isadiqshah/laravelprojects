import './bootstrap';

// resources/js/app.js
import 'toastr';

// resources/js/app.js
import 'toastr/toastr.scss'; // Import Toastr CSS
import toastr from 'toastr'; // Import Toastr JS

window.toastr = toastr; // Make Toastr global

toastr.options = {
    "closeButton": true,
    "progressBar": true,
    "positionClass": "toast-top-right",
    "showDuration": "300",
    "hideDuration": "1000",
    "timeOut": "5000",
    "extendedTimeOut": "1000",
    "showEasing": "swing",
    "hideEasing": "linear",
    "showMethod": "fadeIn",
    "hideMethod": "fadeOut"
};
